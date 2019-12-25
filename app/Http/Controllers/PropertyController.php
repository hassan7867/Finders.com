<?php

namespace App\Http\Controllers;

use App\CommercialFeature;
use App\HomeFeature;
use App\PlotFeature;
use App\Property;
use App\PropertyAttachment;
use App\PropertyContact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($purpose, $country, $city, $location)
    {
        $properties = Property::where('id', '>', 0);
        if ($purpose != 'all') {
            $properties->where('purpose', '=', $purpose);
        }
        if ($country != 'all') {
            $properties->where('country', '=', $country);
        }
        if ($city != 'all') {
            $properties->where('city', '=', $city);
        }
        if ($location != 'all') {
            $properties->where('location', '=', $location);
        }
        $properties = $properties->get();
        for ($i = 0; $i < count($properties); $i++) {
            $properties[$i]['main_image'] = PropertyAttachment::where('id_property', $properties[$i]->id)->first()['image_path'];
            if ($properties[$i]['property_type'] == 'home') {
                $properties[$i]['home_features'] = HomeFeature::where('id_property', $properties[$i]->id)->first();
            }
            if ($properties[$i]['property_type'] == 'plot') {
                $properties[$i]['plot_features'] = PlotFeature::where('id_property', $properties[$i]->id)->first();
            }
            if ($properties[$i]['property_type'] == 'commercial') {
                $properties[$i]['commercial_features'] = CommercialFeature::where('id_property', $properties[$i]->id)->first();
            }
        }
        return view('welcome')->with(['properties' => $properties]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $property = new Property();
        $property->id_property = strval(count(Property::all()) + 1);
        $property->purpose = $request->propertyPurpose;
        $property->property_type = $request->propertyType;
        $property->property_type_detail = $request->propertyTypeDetail;
        $property->country = $request->country;
        $property->city = $request->city;
        $property->location = $request->location;
        $property->title = $request->propertyTitle;
        $property->description = $request->propertyDescription;
        $property->price = $request->propertyPrice;
        $property->land_area = $request->propertyLandArea;
        $property->unit = $request->propertyUnit;
        $property->expires_after = $request->propertyExpireDate;
        $property->date_posting = date('Y-m-d');
        $result = $property->save();

        if ($request->propertyType == 'home') {
            $homeFeatures = new HomeFeature();
            $homeFeatures->bedrooms = $request->bedroomFeature;
            $homeFeatures->bathrooms = $request->bathroomFeature;
            $homeFeatures->kitchens = $request->kitchenFeature;
            $homeFeatures->storerooms = $request->storeRoomFeature;
            $homeFeatures->home_parking_space = $request->homeParkingSpaceFeature;
            $homeFeatures->id_property = $property->id;
            $homeFeatures->save();
        } else if ($request->propertyType == 'plot') {
            $plotFeatures = new PlotFeature();
            $plotFeatures->id_property = $property->id;
            $plotFeatures->corner = $request->cornerFeature;
            $plotFeatures->park_facing = $request->parkFacingFeature;
            $plotFeatures->electricity = $request->electricityFeature;
            $plotFeatures->water_supply = $request->waterSupplyFeature;
            $plotFeatures->sui_gas = $request->suiGasFeature;
            $plotFeatures->save();

        } else if ($request->propertyType == 'commercial') {
            $commercialFeature = new CommercialFeature();
            $commercialFeature->id_property = $property->id;
            $commercialFeature->built_in_year = $request->builtinYearFeature;
            $commercialFeature->rooms = $request->roomFeature;
            $commercialFeature->floors = $request->floorFeature;
            $commercialFeature->elevator = $request->elevatorFeature;
            $commercialFeature->commercial_parking_space = $request->commercialParkingSpaceFeature;
            $commercialFeature->save();
        }

        if (!$request->file('images') == '' && !empty($request->file('images'))) {
            foreach ($request->file('images') as $image) {
                $newName = rand(10, 1000) . time() . $image->getClientOriginalName();
                $image->move(base_path('/data'), $newName);
                $attachments = new PropertyAttachment();
                $attachments->id_property = $property->id;
                $attachments->image_path = $newName;
                $imageResult = $attachments->save();
            }
        }

        $propertyContact = new PropertyContact();
        $propertyContact->name = $request->contactName;
        $propertyContact->email = $request->contactEmail;
        $propertyContact->mobile = $request->contactMobile;
        $propertyContact->id_property = $property->id;
        $propertyContact->save();


        return json_encode(true);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getContact($propertyId)
    {
        return json_encode(PropertyContact::where('id_property', $propertyId)->first());
    }

    public function details($propertyId)
    {
        $properties = Property::where('id', $propertyId)->first();
            $properties['images'] = PropertyAttachment::where('id_property', $properties->id)->get();
            if($properties['property_type'] == 'home'){
                $properties['home_features'] = HomeFeature::where('id_property', $properties->id)->first();
            }
            if($properties['property_type'] == 'plot'){
                $properties['plot_features'] = PlotFeature::where('id_property', $properties->id)->first();
            }
            if($properties['property_type'] == 'commercial'){
                $properties['commercial_features'] = CommercialFeature::where('id_property', $properties->id)->first();
            }
        return view('property-details')->with(['properties' => $properties]);
    }

    public function getImage(Request $request){
        $file = base_path("data/") . $request->attachment;
        $type = mime_content_type($file);
        header('Content-Type:' . $type);
        header('Content-Length: ' . filesize($file));
        return readfile($file);
    }
}
