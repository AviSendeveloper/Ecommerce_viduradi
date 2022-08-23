<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FooterLink;
use App\Models\HomePageCustomization;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\slider;
use Illuminate\Support\Facades\Session;
use Image;

class HomePageSettingController extends Controller
{
      public function adminSlider()
      {
            $sliders = slider::all();
            return view('admin.admin-slider')->with(compact('sliders'));
      }

      public function addSlider()
      {
            return view('admin.add-slider');
      }

      public function addSliderHomePage(Request $request)
      {
            $data = new slider;
            $data->slug = $request->slug;
            $data->caption = $request->caption;
            if ($request->hasfile('image')) {
                  $file = $request->file('image');
                  $fileFirstName = $file->getClientOriginalName();
                  $filename = time() . "-" . $fileFirstName;
                  $file->move('slider/image/', $filename);
                  $data->image = $filename;
            }
            $data->save();
            $message = "Slider was successfully added into the Home Page!!";
            Session::flash('success', $message);
            return redirect('/admin-slider');
      }

      public function deleteBanner($id)
      {
            $data = slider::find($id);
            $data->delete();

            $message = "Slider was successfully deleted from the Home Page!!";
            Session::flash('error', $message);
            return redirect('/admin-slider');
      }
      public function editSlider($id)
      {
            $data = slider::find($id);

            return view('admin.edit-slider')->with(compact('data'));
      }
      public function editSliderHomePage(Request $request)
      {
            $data = slider::find($request->id);
            $data->slug = $request->slug;
            $data->caption = $request->caption;
            if ($request->hasfile('image')) {
                  $file = $request->file('image');
                  $fileFirstName = $file->getClientOriginalName();
                  $filename = time() . "-" . $fileFirstName;
                  $file->move('slider/image/', $filename);
                  $data->image = $filename;
            }
            $data->save();
            $message = "Slider was successfully edited into the Home Page!!";
            Session::flash('success', $message);
            return redirect('/admin-slider');
      }


      // Service functionality

      public function serviceList()
      {
            $services = Service::all();
            return view('admin.service-list')->with(compact('services'));
      }

      public function addService()
      {
            return view('admin.add-service');
      }

      public function addServiceUpload(Request $request)
      {
            // return $request->all();
            $data = new Service;
            $data->title = $request->title;
            $data->category = $request->category;
            if ($request->hasfile('image')) {
                  $file = $request->file('image');
                  $fileFirstName = $file->getClientOriginalName();
                  $filename = time() . "-" . $fileFirstName;
                  $file->move('service/image/', $filename);
                  $data->image = $filename;
            }
            $data->save();
            $message = "Service added successfully";
            Session::flash('success', $message);
            return redirect('admin-service');
      }

      public function editService($id)
      {
            $details = Service::where('id', $id)->first();
            return view('admin.edit-service')->with(compact('details'));
      }

      public function editServiceUpload(Request $request)
      {
            // return $request->all();
            $data = Service::find($request->service_id);
            $data->title = $request->title;
            $data->category = $request->category;
            if ($request->hasfile('image')) {
                  $file = $request->file('image');
                  $fileFirstName = $file->getClientOriginalName();
                  $filename = time() . "-" . $fileFirstName;
                  $file->move('service/image/', $filename);
                  $data->image = $filename;
            }
            $data->save();
            $message = "Service edited successfully";
            Session::flash('success', $message);
            return redirect('admin-service');
      }

      public function deleteService($id)
      {
            $data = Service::find($id);
            $data->delete();
            $message = "Service deleted successfully";
            Session::flash('success', $message);
            return redirect()->back();
      }


      // Footer link functionality -----------------------------------------------------------------------------------------

      public function footerLinkList()
      {
            $links = FooterLink::all();
            return view('admin.footer-link-list')->with(compact('links'));
      }

      public function addFooterLink()
      {
            return view('admin.add-footer-link');
      }

      public function addFooterLinkUpload(Request $request)
      {
            // return $request->all();
            $data = new FooterLink;
            $data->category = $request->category;
            $data->name = $request->name;
            $data->url = $request->url;
            $data->save();
            $message = "Footer link added successfully";
            Session::flash('success', $message);
            return redirect('admin-footer-link');
      }

      public function editFooterLink($id)
      {
            $details = FooterLink::where('id', $id)->first();
            return view('admin.edit-footer-link')->with(compact('details'));
      }

      public function editFooterLinkUpload(Request $request)
      {
            // return $request->all();
            $data = FooterLink::find($request->footer_link_id);
            $data->category = $request->category;
            $data->name = $request->name;
            $data->url = $request->url;
            $data->save();
            $message = "Footer link edited successfully";
            Session::flash('success', $message);
            return redirect('admin-footer-link');
      }

      public function deleteFooterLink($id)
      {
            $data = FooterLink::find($id);
            $data->delete();
            $message = "Footer link deleted successfully";
            Session::flash('success', $message);
            return redirect()->back();
      }

      public function changeFooterLinkStatus(Request $request)
      {
            $link = FooterLink::find($request->link_id);
            $link->status = $request->status;
            $link->save();
            return response()->json(['success' => 'Status change succesfully']);
      }



      // Home page customization --------------------------------------------------------------------------------------

      public function homepageCustomization()
      {
            return view('admin.homepage-customization');
      }

      public function homepageCustomizationUpload(Request $request)
      {
            // return $request->all();
            if (isset($request->slider)) {
                  HomePageCustomization::where('service_name', 'slider')->update(['status' => $request->slider]);
            } else {
                  HomePageCustomization::where('service_name', 'slider')->update(['status' => 0]);
            }
            if (isset($request->service)) {
                  HomePageCustomization::where('service_name', 'service')->update(['status' => $request->service]);
            } else {
                  HomePageCustomization::where('service_name', 'service')->update(['status' => 0]);
            }
            if (isset($request->blog)) {
                  HomePageCustomization::where('service_name', 'blog')->update(['status' => $request->blog]);
            } else {
                  HomePageCustomization::where('service_name', 'blog')->update(['status' => 0]);
            }
            if (isset($request->footer_link)) {
                  HomePageCustomization::where('service_name', 'footer_link')->update(['status' => $request->footer_link]);
            } else {
                  HomePageCustomization::where('service_name', 'footer_link')->update(['status' => 0]);
            }
            if (isset($request->social_link)) {
                  HomePageCustomization::where('service_name', 'social_link')->update(['status' => $request->social_link]);
            } else {
                  HomePageCustomization::where('service_name', 'social_link')->update(['status' => 0]);
            }
            return redirect()->back();
      }

      // public function createThumbnail($path, $width, $height)
      // {
      //       $img = Image::make($path)->resize($width, $height, function ($constraint) {
      //             $constraint->aspectRatio();
      //       });
      //       $img->save($path);
      // }
}
