<!-------------------Result----------------->
<div class="container" style="width: 100%; height: auto; background-color: #fff; border: 3px solid #2A1772; border-radius: 50px; background-image: url(https://ditechnical.in/public/frontend/images/bg.png); background-position: center center; background-size: cover; background-repeat: no-repeat;" >
<table style="width: 100%; padding-top: 20px !important;">
	<tbody>
     <tr style="margin: 0px !important;">
       <td style="text-align: center !important;">
		<img src="{{$qrcode}}" alt="qrcode" style="height:130px; width:130px;">
	  </td>
     </tr>
    </tbody> 
</table>
<h1 style="text-align: center; color: #757336; font-size: 50px; padding: 0px !important; margin: 0px 0px 0px 0px !important;">
   DI TECHNICAL
</h1>
<h2 style="font-style: italic !important; text-align: center; color: #000; font-size: 20px; padding: 0px !important; margin: 0px 0px 0px 0px !important; ">(Institute Of Computer Education Center)</h2>
<h2 style="font-style: italic !important; text-align: center; color: #000; font-size: 20px; padding: 0px !important; margin: 0px 0px 0px 0px !important; ">Dhurwa Bus Stand Ranchi, Jharkhand</h2>
<h2 style="font-style: italic !important; text-align: center; color: #000; font-size: 30px; padding: 0px !important; margin: 10px 0px 0px 0px !important; ">Performance Statement</h2>
<?php
    $purchase_date = $assigncourse->created_at;
    $futureDate = date('Y-m-d', strtotime($purchase_date . '+' . $assigncourse->course->time . 'days'));
?>
<p style="padding: 10px 0px 0px 10px !important; font-weight: 600; font-size: 20px;">Name <span style="padding-left: 110px !important;">:</span> <span class="underline-1" style="border-bottom: 1px solid #000; width: 60%; display: inline-block; text-align: center;">{{$assigncourse->user->full_name}}</span></p>    
<p style="padding: 0px 0px 0px 10px !important;font-weight: 600; font-size: 20px;">Enrollment No. <span style="padding-left: 28px !important;">:</span> <span class="underline-1" style="border-bottom: 1px solid #000; width: 60%; display: inline-block; text-align: center;">{{$assigncourse->enrollment_id}}</span></p>
<p style="padding: 0px 0px 0px 10px !important;font-weight: 600; font-size: 20px;">Center Name <span style="padding-left: 46px !important;">:</span> <span class="underline-1" style="border-bottom: 1px solid #000; width: 60%; display: inline-block; text-align: center;">RANCHI</span></p>
<p style="padding: 0px 0px 0px 10px !important;font-weight: 600; font-size: 20px;">Course Duration <span style="padding-left: 16px !important;">:</span> <span class="underline-1" style="border-bottom: 1px solid #000; width: 60%; display: inline-block; text-align: center;">{{(!empty($assigncourse->created_at)) ? \Carbon\Carbon::parse($assigncourse->created_at)->format('d-F-Y') : 'Not Given'}} to {{(!empty($futureDate)) ? \Carbon\Carbon::parse($futureDate)->format('d-F-Y') : 'Not Given'}}</span></p>


<table style="width: 100%; padding: 20px 0px 0px 0px!important; margin:40px 10px 10px 10px!important; border: 1px solid #000;">
	<tbody>
     <tr style="margin: 0px !important; ">
       <td style="text-align: left !important; font-weight: 600; font-size: 22px;">Course Name:</td>
     </tr>
     <tr style="margin: 0px !important; ">
       <td style="text-align: left !important; font-weight: 400; font-size: 18px; line-height: 30px !important;">{{$assigncourse->course->course_type}}: {{$assigncourse->course->name}}</td>
     </tr>
     <tr>
	     <th style="text-align: left !important; font-weight: 600; font-size: 18px;  border: 1px solid #000;"></th>
	     <th style="text-align: left !important; font-weight: 600; font-size: 18px;  border: 1px solid #000;">Total Marks</th>
	     <th style="text-align: left !important; font-weight: 600; font-size: 18px;  border: 1px solid #000;">Marks Obtained</th>
	 </tr> 
     <tr style="margin: 0px !important;">
       <td style="text-align: left !important; font-weight: 400; font-size: 18px;  border: 1px solid #000;">Theory</td>
       <td style="text-align: left !important; font-weight: 400; font-size: 18px;  border: 1px solid #000;">70</td>
       <td style="text-align: left !important; font-weight: 400; font-size: 18px;  border: 1px solid #000;">{{$model->theory}}</td>
     </tr>
     
     <tr style="margin: 0px !important;">
       <td style="text-align: left !important; font-weight: 400; font-size: 18px;  border: 1px solid #000;">Practical</td>
       <td style="text-align: left !important; font-weight: 400; font-size: 18px;  border: 1px solid #000;">20</td>
       <td style="text-align: left !important; font-weight: 400; font-size: 18px;  border: 1px solid #000;">{{$model->practical}}</td>
     </tr>
     
     <tr style="margin: 0px !important;">
       <td style="text-align: left !important; font-weight: 400; font-size: 18px;  border: 1px solid #000;">Viva</td>
       <td style="text-align: left !important; font-weight: 400; font-size: 18px;  border: 1px solid #000;">10</td>
       <td style="text-align: left !important; font-weight: 400; font-size: 18px;  border: 1px solid #000;">{{$model->viva}}</td>
     </tr>
     
     <tr style="margin: 0px !important;">
       <td style="text-align: left !important; font-weight: 400; font-size: 18px;  border: 1px solid #000;">Sum of</td>
       <td style="text-align: left !important; font-weight: 400; font-size: 18px;  border: 1px solid #000;">100</td>
       <td style="text-align: left !important; font-weight: 400; font-size: 18px;  border: 1px solid #000;">{{$model->theory+$model->practical+$model->viva}}</td>
     </tr>
     
     <!--<tr style="margin: 0px !important;">-->
     <!--  <td style="text-align: left !important; font-weight: 400; font-size: 18px;  border: 1px solid #000;">Full Marks</td>-->
     <!--  <td style="text-align: left !important; font-weight: 400; font-size: 18px;  border: 1px solid #000;">70</td>-->
     <!--  <td style="text-align: left !important; font-weight: 400; font-size: 18px;  border: 1px solid #000;">100</td>-->
     <!--</tr>-->
      <tr style="margin: 0px !important;">
       <td style="text-align: left !important; font-weight: 400; font-size: 18px;  border: 1px solid #000;">Grade</td>
       <td style="text-align: left !important; font-weight: 400; font-size: 18px;  border: 1px solid #000;"></td>
       <td style="text-align: left !important; font-weight: 400; font-size: 18px;  border: 1px solid #000;">
           @if(($model->theory+$model->practical+$model->viva)>60)
           A+
           @elseif(($model->theory+$model->practical+$model->viva)>=45 && ($model->theory+$model->practical+$model->viva)<=60)
           A
           @else
           B+
           @endif
       </td>
     </tr>
    </tbody> 
</table>
<!--<table style="width: 100%; overflow-x:auto; padding: 0px !important;">-->
<!--		<tbody>-->
<!--			<tr style="padding: 0px 0px 0px 0px !important; margin: 0px 0px 0px 0px !important;">-->
<!--				<td style="text-align: center!important; padding: 0px 0px 0px 0px !important; margin: 0px 0px 0px 0px !important;">-->
<!--					<img src="{{URL::asset('public/frontend/images/Center.png')}}" alt="" style="width: 85px; height: 85px; margin: 0px 0px 0px 0px !important; padding: 0px 0px 0px 0px !important;">-->
<!--				</td>-->
<!--				<td style="text-align: center!important; padding: 0px 0px 0px 0px !important; margin: 0px 0px 0px 0px !important;">-->
<!--					<img src="{{URL::asset('public/frontend/images/Alka.png')}}" alt="" style="width: 142px; height: 28px; margin: 0px 0px 0px 0px !important; padding: 0px 0px 0px 0px !important;">-->
<!--				</td>-->
<!--				<td style="text-align: center!important; padding: 0px 0px 0px 0px !important; margin: 0px 0px 0px 0px !important;">-->
<!--					<img src="{{URL::asset('public/frontend/images/dir.png')}}" alt="" style="width: 198px; height: 66px; margin: 0px 0px 0px 0px !important; padding: 0px 0px 0px 0px !important;">-->
<!--				</td>-->
<!--			</tr>-->
<!--			<tr style="padding: 0px 0px 0px 0px !important; margin: 0px 0px 0px 0px !important;">-->
<!--				<td style="padding: 0px 0px 0px 0px !important; margin: 0px 0px 0px 0px !important;">-->
<!--					<p style="text-align: center!important; font-weight: bold; padding: 0px 0px 0px 0px !important; margin: 0px 0px 0px 0px !important; font-size: 18px; color: #2A1772; font-style: italic !important;">Center Incharge</p>-->
<!--				</td>-->
<!--				<td style="padding: 0px 0px 0px 0px !important; margin: 0px 0px 0px 0px !important;">-->
<!--					<p style="text-align: center!important; font-weight: bold; padding: 0px 0px 0px 0px !important; margin: 0px 0px 0px 0px !important; font-size: 18px; color: #2A1772; font-style: italic !important;">Controller Of Examination</p>-->
<!--				</td>-->
<!--				<td style="padding: 0px 0px 0px 0px !important; margin: 0px 0px 0px 0px !important;">-->
<!--					<p style="text-align: center!important; font-weight: bold; padding: 30px 0px 0px 0px !important; margin: 0px 0px 0px 0px !important; font-size: 18px; color: #2A1772; font-style: italic !important;">Document Certificate By Director<br>(ANIL KUMAR)</p>-->
<!--				</td>-->
<!--			</tr>-->
			
<!--		</tbody>-->
<!--	</table>	-->

    <table style="width: 100%; overflow-x:auto; padding: 0px !important;">
		<tbody>
			<tr style="padding: 0px 0px 0px 0px !important; margin: 0px 0px 0px 0px !important;">
				<td style="text-align: center!important; padding: 0px 0px 0px 0px !important; margin: 0px 0px 0px 0px !important;">
					<img src="{{URL::asset('public/frontend/images/Center.png')}}" alt="" style="width: 95px; height: 95px; margin: 0px 0px 0px 0px !important; padding: 0px 0px 0px 0px !important; line-height: 0px !important;">
				</td>
				<td style="text-align: center!important; padding: 0px 0px 0px 0px !important; margin: 0px 0px 0px 0px !important;">
					<img src="{{URL::asset('public/frontend/images/Alka.png')}}" alt="" style="width: 152px; height: 48px; margin: 0px 0px 0px 0px !important; padding: 0px 0px 0px 0px !important; line-height: 0px !important;">
				</td>
				<td style="text-align: center!important; padding: 0px 0px 0px 0px !important; margin: 0px 0px 0px 0px !important;">
					<img src="{{URL::asset('public/frontend/images/dir.png')}}" alt="" style="width: 210px; height: 86px; margin: 0px 0px 0px 0px !important; padding: 0px 0px 0px 0px !important; line-height: 0px !important;">
				</td>
			</tr>
			<tr style="padding: 0px 0px 0px 0px !important; margin: 0px 0px 0px 0px !important;">
				<td style="padding: 0px 0px 0px 0px !important; margin: 0px 0px 0px 0px !important;">
					<p style="text-align: center!important; font-weight: bold; padding: 0px 0px 0px 0px !important; margin: 0px 0px 0px 0px !important; font-size: 18px; color: #2A1772; font-style: italic !important;">Center Incharge</p>
				</td>
				<td style="padding: 0px 0px 0px 0px !important; margin: 0px 0px 0px 0px !important;">
					<p style="text-align: center!important; font-weight: bold; padding: 0px 0px 0px 0px !important; margin: 0px 0px 0px 0px !important; font-size: 18px; color: #2A1772; font-style: italic !important;">Controller Of Examination</p>
				</td>
				<td style="padding: 0px 0px 0px 0px !important; margin: 0px 0px 0px 0px !important;">
					<p style="text-align: center!important; font-weight: bold; padding: 0px 0px 0px 0px !important; margin: 0px 0px 0px 0px !important; font-size: 18px; color: #2A1772; font-style: italic !important;">Document Certificate By Director<br>(ANIL KUMAR)</p>
				</td>
			</tr>
			
		</tbody>
	</table>
</div>    