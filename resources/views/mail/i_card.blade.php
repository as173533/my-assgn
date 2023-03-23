<div class="container" style="width:100%;height: auto;">
 <div class="background" style="width:500px;height: 440px;background-color: #D3EFFB;padding-bottom: 0px; border-radius: 20px !important;">
   <img src="{{URL::asset('public/frontend/images/new-logo-di-2.png') }}" style="float: left; width: 80px; height:80px; margin:2px 0px 0px 8px !important;"> 
   <div class="heading">
        <p style="text-align: center; color: #02194B; font-size: 25px;
           padding: 0px !important; font-weight: bold; margin: 0px 0px 0px 0px!important;;">DI TECHNICAL</p>
        <p style="text-align: center; color: #FED20D; font-size: 16px;font-weight: bold; padding: 0px 0px 0px 0px !important; margin: 0px 0px 0px 0px!important;">(Institute Of Computer Education Center)</p>
        <p style="text-align: center; color: #000; font-size: 16px;font-weight: bold; padding: 0px 0px 0px 0px !important; margin: 0px 0px 0px 0px!important;">Dhurwa Bus Stand Ranchi, Jharkhand</p>
        <p style="text-align: center; color: #FF5421; font-size: 12px;font-weight: bold; padding: 0px 0px 10px 0px !important; margin: 0px 0px 0px 0px!important; border-bottom: 3px solid #00ACED;">Ph No: +91 8210066756 | Email: anilv1615@gmail.com</p> 
    </div>
    
    <div class="data-section" style="width: 100%;">
        <table style="width: 100%; padding-top: 10px; padding-left: 10px; ">
            <tbody>
            <tr>
               <td style="font-size: 8px !important; font-weight: 500; line-height: 20px !important; color: #A4427F !important; text-transform: uppercase !important; padding-top: 5px !important;">Registration No:</td>
               <td style="font-size: 8px !important; line-height: 20px !important; color: #000 !important; text-transform: uppercase !important; padding-top: 5px !important;">{{$assigncourse->user->registration_id}}</td>
               <th rowspan="10">
                    <img src="{{($assigncourse->user->image!='')? URL::asset('public/uploads/user').'/'.$assigncourse->user->image:URL::asset('public/frontend/images/profile.jpg') }}" style="float: right; width: 100px !important; height: 100px !important; margin: 0px 0px 0px 0px !important; padding-left: 0px !important; padding-right: 0px !important; padding-top: 15px !important;">
                </th> 
            
            </tr>
            <tr>
               <td style="font-size: 8px !important; font-weight: 500; line-height: 20px !important; color: #A4427F !important; text-transform: uppercase !important; padding-top: 5px !important;">Student Name:</td>
               <td style="font-size: 8px !important; line-height: 20px !important; color: #000 !important; text-transform: uppercase !important; padding-top: 5px !important;">{{$assigncourse->user->full_name}}</td>
               
            </tr>
            <tr>
               <td style="font-size: 8px !important; font-weight: 500; line-height: 20px !important; color: #A4427F !important; text-transform: uppercase !important;">Father's Name:</td>
               <td style="font-size: 8px !important; line-height: 20px !important; color: #000 !important; text-transform: uppercase !important;">{{$assigncourse->user->father_name}}</td>
            </tr>
            <tr>
               <td style="font-size: 8px !important; font-weight: 500; line-height: 20px !important; color: #A4427F !important; text-transform: uppercase !important;">Mother's Name:</td>
               <td style="font-size: 8px !important; line-height: 20px !important; color: #000 !important; text-transform: uppercase !important;">{{$assigncourse->user->mother_name}}</td>
            </tr>
            <tr>
               <td style="font-size: 8px !important; font-weight: 500; line-height: 20px !important; color: #A4427F !important; text-transform: uppercase !important;">Course Name:</td>
               <td style="font-size: 8px !important; line-height: 20px !important; color: #000 !important; text-transform: uppercase !important;">{{$assigncourse->course->name}}<</td>
            </tr>
            <tr>
               <td style="font-size: 8px !important; font-weight: 500; line-height: 20px !important; color: #A4427F !important; text-transform: uppercase !important;">Enrollment No:</td>
               <td style="font-size: 8px !important; line-height: 20px !important; color: #000 !important; text-transform: uppercase !important;">{{$assigncourse->enrollment_id}}</td>
            </tr>
            <tr>
               <td style="font-size: 8px !important; font-weight: 500; line-height: 20px !important; color: #A4427F !important; text-transform: uppercase !important;">Address:</td>
               <td style="font-size: 8px !important; line-height: 20px !important; color: #000 !important; text-transform: uppercase !important;">{{$assigncourse->user->address}}</td>
            </tr>
            <tr>
               <td style="font-size: 8px !important; font-weight: 500; line-height: 20px !important; color: #A4427F !important; text-transform: uppercase !important;">State:</td>
               <td style="font-size: 8px !important; line-height: 20px !important; color: #000 !important; text-transform: uppercase !important;">{{$assigncourse->user->state}}</td>
            </tr>
            <tr>
               <td style="font-size: 8px !important; font-weight: 500; line-height: 20px !important; color: #A4427F !important; text-transform: uppercase !important;">District:</td>
               <td style="font-size: 8px !important; line-height: 20px !important; color: #000 !important; text-transform: uppercase !important;">{{$assigncourse->user->district}}</td>
            </tr>
            <tr>
               <td style="font-size: 8px !important; font-weight: 500; line-height: 20px !important; color: #A4427F !important; text-transform: uppercase !important;">Contact No:</td>
               <td style="font-size: 8px !important; line-height: 20px !important; color: #000 !important; text-transform: uppercase !important;">{{$assigncourse->user->phone}}</td>
            </tr>
            </tbody>
        </table>
        
        <table style="width: 100%; overflow-x:auto; padding: 0px 20px 0px 20px !important;">
		<tbody>
			<tr>
				<td style="text-align: right!important;">
					<img src="{{URL::asset('public/frontend/images/Center.png')}}" alt="" style="width: 50px; height: 50px; margin: 0px !important;">
				</td>
			</tr>
			<tr>
				<td>
					<p style="text-align: right!important; font-weight: bold; padding: 0px !important; margin: 0px !important; font-size: 10px; color: #A4427F; font-style: italic !important;">Center Incharge</p>
				</td>
			</tr>
			
		</tbody>
	</table>
    </div>    
 </div>        
</div>    
    