<!DOCTYPE html>
<html>

<head>
     <title>Ambition Pipes</title>
</head>

<body>
     <table style="background-color:#F1F7FF; padding:10px;">
          <tr>
               <!-- <td style="text-align: center; border-radius: 2px;"><img src="http://radixtechnocast.com/public/img/radix.png" height="auto" width="120px"></td> -->
               <td style="text-align: center; border-radius: 2px;"><img src="http://radixtechnocast.com/public/img/Ambiton.png" height="auto" width="120px"></td>
          </tr>
          <tr>
               <td style="text-align: center; font-weight: 600; font-size: 18px;">New Inquiry</td>
          </tr>
          <tr>
               <td style="text-align: center; font-weight: 500; font-size: 15px;">You have new inquiry from your website.</td>
          </tr>
          <tr>
               <td style="font-size: 16px; font-weight: 500; padding-top:15px;"><b>Name :</b> {{ ucfirst($details['name']) }}</td>
          </tr>
          @if(!is_null(($details['email'])))
          <tr>
               <td style="font-size: 16px; font-weight: 500; padding-top:15px;"><b>Email :</b> {{ ucfirst($details['email']) }}</td>
          </tr>
          @endif
          <tr>
               <td style="font-size: 16px; font-weight: 500; padding-top:15px;"><b>Number :</b> {{ ucfirst($details['number']) }}</td>
          </tr>
          <tr>
               <td style="font-size: 16px; font-weight: 500; padding-top:15px;"><b>Subject :</b> {{ ucfirst($details['subject']) }}</td>
          </tr>
          <tr>
               <td style="font-size: 16px; font-weight: 500; padding-top:20px;"><b>Message :</b> {{ ucfirst($details['message']) }}</td>
          </tr>       
     </table>
</body>

</html>