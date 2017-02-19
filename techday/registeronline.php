<?php
   function ValidateEmail($email)
   {
      $pattern = '/^([0-9a-z]([-.\w]*[0-9a-z])*@(([0-9a-z])+([-\w]*[0-9a-z])*\.)+[a-z]{2,6})$/i';
      return preg_match($pattern, $email);
   }

   if($_SERVER['REQUEST_METHOD'] == 'POST')
   {
      $mailto = 'kanakdhiman123@gmail.com';
      $mailfrom = isset($_POST['email']) ? $_POST['email'] : $mailto;
      $mailcc = 'gurpreet312@gmail.com';
      $mailbcc = 'sachindhiman123@gmail.com';
      $subject = 'Techday email registration';
      $message = 'Values submitted from web site form:';
      $success_url = './success.html';
      $error_url = './fail.html';
      $error = '';
      $eol = "\n";
      $max_filesize = isset($_POST['filesize']) ? $_POST['filesize'] * 1024 : 1024000;
      $boundary = md5(uniqid(time()));

      $header  = 'From: '.$mailfrom.$eol;
      $header .= 'Reply-To: '.$mailfrom.$eol;
      $header .= 'Cc: '.$mailcc.$eol;
      $header .= 'Bcc: '.$mailbcc.$eol;
      $header .= 'MIME-Version: 1.0'.$eol;
      $header .= 'Content-Type: multipart/mixed; boundary="'.$boundary.'"'.$eol;
      $header .= 'X-Mailer: PHP v'.phpversion().$eol;
      if (!ValidateEmail($mailfrom))
      {
         $error .= "The specified email address is invalid!\n<br>";
      }

      if (!empty($error))
      {
         $errorcode = file_get_contents($error_url);
         $replace = "##error##";
         $errorcode = str_replace($replace, $error, $errorcode);
         echo $errorcode;
         exit;
      }

      $internalfields = array ("submit", "reset", "send", "captcha_code");
      $message .= $eol;
      $message .= "IP Address : ";
      $message .= $_SERVER['REMOTE_ADDR'];
      $message .= $eol;
      foreach ($_POST as $key => $value)
      {
         if (!in_array(strtolower($key), $internalfields))
         {
            if (!is_array($value))
            {
               $message .= ucwords(str_replace("_", " ", $key)) . " : " . $value . $eol;
            }
            else
            {
               $message .= ucwords(str_replace("_", " ", $key)) . " : " . implode(",", $value) . $eol;
            }
         }
      }

      $body  = 'This is a multi-part message in MIME format.'.$eol.$eol;
      $body .= '--'.$boundary.$eol;
      $body .= 'Content-Type: text/plain; charset=ISO-8859-1'.$eol;
      $body .= 'Content-Transfer-Encoding: 8bit'.$eol;
      $body .= $eol.stripslashes($message).$eol;
      if (!empty($_FILES))
      {
          foreach ($_FILES as $key => $value)
          {
             if ($_FILES[$key]['error'] == 0 && $_FILES[$key]['size'] <= $max_filesize)
             {
                $body .= '--'.$boundary.$eol;
                $body .= 'Content-Type: '.$_FILES[$key]['type'].'; name='.$_FILES[$key]['name'].$eol;
                $body .= 'Content-Transfer-Encoding: base64'.$eol;
                $body .= 'Content-Disposition: attachment; filename='.$_FILES[$key]['name'].$eol;
                $body .= $eol.chunk_split(base64_encode(file_get_contents($_FILES[$key]['tmp_name']))).$eol;
             }
         }
      }
      $body .= '--'.$boundary.'--'.$eol;
      mail($mailto, $subject, $body, $header);
      header('Location: '.$success_url);
      exit;
   }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8">
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Embedded Training Ludhiana | Embedded System Training | Embedded Software Development | Embedded Solutions - Ludhiana , Punjab</title>
<meta name="keywords" content="8051 Training Ludhiana
Embedded Training Ludhiana
Embedded System Development Ludhiana 
Embedded Solutions Ludhiana Punjab
ARM Training Ludhiana Punjab
Embedded Training in Ludhiana Punjab
Summer Training in Ludhiana Punjab
Six Months/Six Weeks Training in Ludhiana Punjab
Vocational Training 2010 in Ludhiana Punjab
PIC16F/PIC18F Training in Ludhiana Punjab
Embedded Linux Training in Ludhiana Punjab
Professional Training-Ludhiana
Industrial Training in Ludhiana
Embedded System Courses
B.Tech /BE training Ludhiana
Best Embedded Training in Ludhiana Punjab
LPC2148 Training in Ludhiana
Microchip PIC Training 
Microcontroller Training Ludhiana
NxP Training Ludhiana
">
<link rel="shortcut icon" href="imb1.ico">
<style type="text/css">
body
{
   background-color: #FFFFFF;
   color: #000000;
   scrollbar-face-color: #ECE9D8;
   scrollbar-arrow-color: #000000;
   scrollbar-3dlight-color: #ECE9D8;
   scrollbar-darkshadow-color: #716F64;
   scrollbar-highlight-color: #FFFFFF;
   scrollbar-shadow-color: #ACA899;
   scrollbar-track-color: #D4D0C8;
}
</style>
<style type="text/css">
a
{
   color: #00008B;
}
a:hover
{
   color: #FF0000;
}
a.my_style:link
{
   color: #1E287B;
   background: #FFFFFF;
   font-weight: bold;
   text-decoration: none;
}
a.my_style:visited
{
   color: #D60D00;
   text-decoration: none;
}
a.my_style:active
{
   color: #D60D00;
   background: #FFFFFF;
   text-decoration: none;
}
a.my_style:hover
{
   color: #FFFFFF;
   background: #1E287B;
   font-weight: bold;
   text-decoration: none;
}
</style>
<script type="text/javascript" src="./jscookmenu.js"></script>
<script type="text/javascript" src="./jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="./jquery.effects.core.min.js"></script>
<script type="text/javascript" src="./jquery.effects.blind.min.js"></script>
<script type="text/javascript" src="./jquery.effects.bounce.min.js"></script>
<script type="text/javascript" src="./jquery.effects.clip.min.js"></script>
<script type="text/javascript" src="./jquery.effects.drop.min.js"></script>
<script type="text/javascript" src="./jquery.effects.fold.min.js"></script>
<script type="text/javascript" src="./jquery.effects.scale.min.js"></script>
<script type="text/javascript" src="./jquery.effects.slide.min.js"></script>
<script type="text/javascript" src="./wb.slideshow.js"></script>
<style type="text/css">
.ThemeMenuBar2Menu,
.ThemeMenuBar2SubMenuTable
{
   font-family: Arial;
   font-size: 13px;
   font-weight: normal;
   color: #FFFFFF;
   text-align: left;
   padding: 0;
   cursor: pointer;
}
.ThemeMenuBar2MenuOuter
{
   background-color: #1E287B;
   border: 0;
}
.ThemeMenuBar2SubMenu
{
   position: absolute;
   visibility: hidden;
   border: 0;
   padding: 0;
   border: 0;
}
.ThemeMenuBar2Menu td
{
   padding: 4px 0px 4px 0px;
}
.ThemeMenuBar2SubMenuTable
{
   color: #000000;
   text-align: left;
   background-color: #9FA7E8;
   font-weight: normal;
   font-style: normal;
   text-decoration: none;
}
.ThemeMenuBar2SubMenuTable td
{
   white-space: nowrap;
}
.ThemeMenuBar2MainItem,
.ThemeMenuBar2MainItemHover,
.ThemeMenuBar2MainItemActive,
.ThemeMenuBar2MenuItem,
.ThemeMenuBar2MenuItemHover,
.ThemeMenuBar2MenuItemActive
{
   white-space: nowrap;
}
.ThemeMenuBar2MainItemHover,
.ThemeMenuBar2MainItemActive
{
   color: #000000;
   background-color: #9FA7E8;
   font-weight: normal;
   font-style: normal;
   text-decoration: none;
}
.ThemeMenuBar2MenuItemHover,
.ThemeMenuBar2MenuItemActive
{
   color: #FFFFFF;
   background-color: #1E287B;
   font-weight: normal;
   font-style: normal;
   text-decoration: none;
}
.ThemeMenuBar2MenuFolderLeft,
.ThemeMenuBar2MenuFolderRight,
.ThemeMenuBar2MenuItemLeft,
.ThemeMenuBar2MenuItemRight
{
   padding: 4px 0px 4px 0px;
}
td.ThemeMenuBar2MainFolderText,
td.ThemeMenuBar2MainItemText
{
   padding: 4px 20px 4px 20px;
}
.ThemeMenuBar2MenuFolderText,
.ThemeMenuBar2MenuItemText
{
   padding: 4px 8px 4px 8px;
}
td.ThemeMenuBar2MenuSplit
{
   overflow: hidden;
   background-color: inherit;
}
div.ThemeMenuBar2MenuSplit
{
   height: 1px;
   margin: 0px 0px 0px 0px;
   overflow: hidden;
   background-color: inherit;
   border-top: 1px solid #FFFFFF;
}
.ThemeMenuBar2MenuVSplit
{
   display: block;
   width: 1px;
   margin: 0px 22px 0px 22px;
   overflow: hidden;
   background-color: inherit;
   border-right: 1px solid #FFFFFF;
}
</style>
<script type="text/javascript">
$(document).ready(function()
{
   $("#SlideShow1").slideshow(
   {
      interval: 4000,
      type: 'sequence',
      effect: 'fade',
      direction: '',
      effectlength: 2000
   });
});
</script>
</head>
<body>
<div id="wb_MasterPage2" style="margin:0;padding:0;position:absolute;left:2px;top:1242px;width:1000px;height:59px;text-align:left;z-index:45;">
<div id="wb_TextMenu1" style="margin:0;padding:0;position:absolute;left:360px;top:23px;width:305px;height:16px;text-align:center;z-index:0;">
<font style="font-size:11px;" color="#000000" face="Arial">
[  <a href="http://www.imbuent.com">Home</a> ]&nbsp;[  <a href="http://www.imbuent.com/aboutus.html">About Us</a> ]&nbsp;[  <a href="http://www.imbuent.com/contactus.html">Contact Us</a> ]&nbsp;[  <a href="http://www.imbuent.com/support.html">Support</a> ]</font></div>
<div id="wb_Text1" style="margin:0;padding:0;position:absolute;left:23px;top:24px;width:112px;height:14px;text-align:left;z-index:1;">
<font style="font-size:11px" color="#000000" face="Arial"><b><a href="http://www.imbuent.com" class="my_style">www.imbuent.com</a></b></font></div>
<div id="wb_Text2" style="margin:0;padding:0;position:absolute;left:944px;top:24px;width:53px;height:14px;text-align:left;z-index:2;">
<font style="font-size:11px" color="#000000" face="Arial"><a href="http://www.imbuent.com/disclaimer.html" class="my_style">Disclaimer</a></font></div>
<div id="wb_Text3" style="margin:0;padding:0;position:absolute;left:155px;top:45px;width:725px;height:14px;text-align:left;z-index:3;">
<font style="font-size:11px" color="#1E287B" face="Arial">All other company, product, or service names mentioned in this site may be trademarks or service marks of their respective owners.</font></div>
<div id="wb_Shape2" style="margin:0;padding:0;position:absolute;left:0px;top:13px;width:1000px;height:3px;text-align:center;z-index:4;">
<img src="images/img0003.gif" id="Shape2" alt="" title="" style="border-width:0;width:1000px;height:3px"></div>
</div>
<div id="wb_Image2" style="margin:0;padding:0;position:absolute;left:972px;top:335px;width:30px;height:30px;text-align:left;z-index:46;">
<a href="http://twitter.com/imbuent" target="_blank"><img src="images/twittericon.jpg" id="Image2" alt="" border="0" style="width:30px;height:30px;"></a></div>
<div id="wb_MasterPage3" style="margin:0;padding:0;position:absolute;left:2px;top:290px;width:1000px;height:34px;text-align:left;z-index:47;">
<div id="wb_Text1" style="margin:0;padding:0;position:absolute;left:20px;top:10px;width:980px;height:16px;text-align:left;z-index:5;">
<font style="font-size:13px" color="#000000" face="Arial"><b>Checkout our new Products <a href="http://www.imbuent.com/products.html" class="my_style">Header Boards</a> &amp; <a href="http://www.imbuent.com/s_d_card.html" class="my_style">microSD Card to DIP Adapter</a>&nbsp; </b></font><font style="font-size:11px" color="#000000" face="Arial">&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; </font></div>
<div id="wb_Shape2" style="margin:0;padding:0;position:absolute;left:0px;top:33px;width:1000px;height:1px;text-align:center;z-index:6;">
<img src="images/img0002.gif" id="Shape2" alt="" title="" style="border-width:0;width:1000px;height:1px"></div>
</div>
<div id="wb_Text15" style="margin:0;padding:0;position:absolute;left:847px;top:340px;width:122px;height:15px;text-align:left;z-index:48;">
<font style="font-size:12px" color="#1E287B" face="Arial"><b>Imbuent @ Twitter</b></font></div>
<div id="wb_Form1" style="position:absolute;background-color:#F0F0F0;left:174px;top:408px;width:408px;height:571px;z-index:49">
<form name="contact" method="post" action="<?php echo basename(__FILE__); ?>" enctype="multipart/form-data" id="Form1">
<div id="wb_Text1" style="margin:0;padding:0;position:absolute;left:9px;top:15px;width:50px;height:16px;text-align:left;z-index:7;">
<font style="font-size:13px" color="#000000" face="Arial">Name</font></div>
<input type="text" id="Editbox1" style="position:absolute;left:129px;top:10px;width:198px;height:16px;border:1px #C0C0C0 solid;font-family:Arial;font-size:11px;z-index:8" name="Name" value="" tabindex="1">
<div id="wb_Text4" style="margin:0;padding:0;position:absolute;left:10px;top:161px;width:68px;height:16px;text-align:left;z-index:9;">
<font style="font-size:13px" color="#000000" face="Arial">Address</font></div>
<input type="text" id="Editbox2" style="position:absolute;left:129px;top:160px;width:198px;height:16px;border:1px #C0C0C0 solid;font-family:Arial;font-size:11px;z-index:10" name="address" value="" tabindex="5">
<div id="wb_Text5" style="margin:0;padding:0;position:absolute;left:10px;top:191px;width:50px;height:16px;text-align:left;z-index:11;">
<font style="font-size:13px" color="#000000" face="Arial">City</font></div>
<div id="wb_Text6" style="margin:0;padding:0;position:absolute;left:10px;top:221px;width:50px;height:16px;text-align:left;z-index:12;">
<font style="font-size:13px" color="#000000" face="Arial">State</font></div>
<input type="text" id="Editbox4" style="position:absolute;left:129px;top:220px;width:198px;height:16px;border:1px #C0C0C0 solid;font-family:Arial;font-size:11px;z-index:13" name="state" value="" tabindex="7">
<div id="wb_Text7" style="margin:0;padding:0;position:absolute;left:8px;top:251px;width:71px;height:16px;text-align:left;z-index:14;">
<font style="font-size:13px" color="#000000" face="Arial"> Pin Code</font></div>
<input type="text" id="Editbox5" style="position:absolute;left:129px;top:250px;width:198px;height:16px;border:1px #C0C0C0 solid;font-family:Arial;font-size:11px;z-index:15" name="code" value="" tabindex="8">
<input type="text" id="Editbox6" style="position:absolute;left:129px;top:280px;width:198px;height:16px;border:1px #C0C0C0 solid;font-family:Arial;font-size:11px;z-index:16" name="phone" value="" tabindex="9">
<div id="wb_Text9" style="margin:0;padding:0;position:absolute;left:11px;top:311px;width:50px;height:16px;text-align:left;z-index:17;">
<font style="font-size:13px" color="#000000" face="Arial">Email</font></div>
<input type="text" id="Editbox7" style="position:absolute;left:129px;top:310px;width:198px;height:16px;border:1px #C0C0C0 solid;font-family:Arial;font-size:11px;z-index:18" name="email" value="" tabindex="10">
<div id="wb_Text10" style="margin:0;padding:0;position:absolute;left:11px;top:342px;width:50px;height:16px;text-align:left;z-index:19;">
<font style="font-size:13px" color="#000000" face="Arial">Country</font></div>
<div style="position:absolute;left:129px;top:340px;width:198px;height:18px;border:1px #C0C0C0 solid;z-index:20">
<select name="country" size="1" id="Combobox1" style="position:absolute;left:0px;top:0px;width:100%;height:100%;border-width:0px;font-family:Arial;font-size:11px;" tabindex="11">
<option selected value="Select">Select your country</option>
<option value="Afghanistan">Afghanistan</option>
<option value="Aland Islands">Aland Islands</option>
<option value="Albania">Albania</option>
<option value="Algeria">Algeria</option>
<option value="American Samoa">American Samoa</option>
<option value="Andorra">Andorra</option>
<option value="Angola">Angola</option>
<option value="Anguilla">Anguilla</option>
<option value="Antarctica">Antarctica</option>
<option value="Antigua and Barbuda">Antigua and Barbuda</option>
<option value="Argentina">Argentina</option>
<option value="Armenia">Armenia</option>
<option value="Aruba">Aruba</option>
<option value="Australia">Australia</option>
<option value="Austria">Austria</option>
<option value="Azerbaijan">Azerbaijan</option>
<option value="Bahamas">Bahamas</option>
<option value="Bahrain">Bahrain</option>
<option value="Bangladesh">Bangladesh</option>
<option value="Barbados">Barbados</option>
<option value="Belarus">Belarus</option>
<option value="Belgium">Belgium</option>
<option value="Belize">Belize</option>
<option value="Benin">Benin</option>
<option value="Bermuda">Bermuda</option>
<option value="Bhutan">Bhutan</option>
<option value="Bolivia">Bolivia</option>
<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
<option value="Botswana">Botswana</option>
<option value="Bouvet Island">Bouvet Island</option>
<option value="Brazil">Brazil</option>
<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
<option value="Brunei Darussalam">Brunei Darussalam</option>
<option value="Bulgaria">Bulgaria</option>
<option value="Burkina Faso">Burkina Faso</option>
<option value="Burundi">Burundi</option>
<option value="Cambodia">Cambodia</option>
<option value="Cameroon">Cameroon</option>
<option value="Canada">Canada</option>
<option value="Cape Verde">Cape Verde</option>
<option value="Cayman Islands">Cayman Islands</option>
<option value="Central African Republic">Central African Republic</option>
<option value="Chad">Chad</option>
<option value="Chile">Chile</option>
<option value="China">China</option>
<option value="Christmas Island">Christmas Island</option>
<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
<option value="Colombia">Colombia</option>
<option value="Comoros">Comoros</option>
<option value="Congo">Congo</option>
<option value="Cook Islands">Cook Islands</option>
<option value="Costa Rica">Costa Rica</option>
<option value="Cote D'Ivoire">Cote D'Ivoire</option>
<option value="Croatia">Croatia</option>
<option value="Cuba">Cuba</option>
<option value="Cyprus">Cyprus</option>
<option value="Czech Republic">Czech Republic</option>
<option value="Denmark">Denmark</option>
<option value="Djibouti">Djibouti</option>
<option value="Dominica">Dominica</option>
<option value="Dominican Republic">Dominican Republic</option>
<option value="Ecuador">Ecuador</option>
<option value="Egypt">Egypt</option>
<option value="El Salvador">El Salvador</option>
<option value="Equatorial Guinea">Equatorial Guinea</option>
<option value="Eritrea">Eritrea</option>
<option value="Estonia">Estonia</option>
<option value="Ethiopia">Ethiopia</option>
<option value="Falkland Islands">Falkland Islands</option>
<option value="Faroe Islands">Faroe Islands</option>
<option value="Fiji">Fiji</option>
<option value="Finland">Finland</option>
<option value="France">France</option>
<option value="French Guiana">French Guiana</option>
<option value="French Polynesia">French Polynesia</option>
<option value="French Southern Territories">French Southern Territories</option>
<option value="Gabon">Gabon</option>
<option value="Gambia">Gambia</option>
<option value="Georgia">Georgia</option>
<option value="Germany">Germany</option>
<option value="Ghana">Ghana</option>
<option value="Gibraltar">Gibraltar</option>
<option value="Greece">Greece</option>
<option value="Greenland">Greenland</option>
<option value="Grenada">Grenada</option>
<option value="Guadeloupe">Guadeloupe</option>
<option value="Guam">Guam</option>
<option value="Guatemala">Guatemala</option>
<option value="Guinea">Guinea</option>
<option value="Guinea-Bissau">Guinea-Bissau</option>
<option value="Guyana">Guyana</option>
<option value="Haiti">Haiti</option>
<option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
<option value="Vatican City">Vatican City</option>
<option value="Honduras">Honduras</option>
<option value="Hong Kong">Hong Kong</option>
<option value="Hungary">Hungary</option>
<option value="Iceland">Iceland</option>
<option value="India">India</option>
<option value="Indonesia">Indonesia</option>
<option value="Iran">Iran</option>
<option value="Iraq">Iraq</option>
<option value="Ireland">Ireland</option>
<option value="Israel">Israel</option>
<option value="Italy">Italy</option>
<option value="Jamaica">Jamaica</option>
<option value="Japan">Japan</option>
<option value="Jordan">Jordan</option>
<option value="Kazakhstan">Kazakhstan</option>
<option value="Kenya">Kenya</option>
<option value="Kiribati">Kiribati</option>
<option value="South Korea">South Korea</option>
<option value="North Korea">North Korea</option>
<option value="Kuwait">Kuwait</option>
<option value="Kyrgyzstan">Kyrgyzstan</option>
<option value="Laos">Laos</option>
<option value="Latvia">Latvia</option>
<option value="Lebanon">Lebanon</option>
<option value="Lesotho">Lesotho</option>
<option value="Liberia">Liberia</option>
<option value="Libya">Libya</option>
<option value="Liechtenstein">Liechtenstein</option>
<option value="Lithuania">Lithuania</option>
<option value="Luxembourg">Luxembourg</option>
<option value="Macao">Macao</option>
<option value="Macedonia">Macedonia</option>
<option value="Madagascar">Madagascar</option>
<option value="Malawi">Malawi</option>
<option value="Malaysia">Malaysia</option>
<option value="Maldives">Maldives</option>
<option value="Mali">Mali</option>
<option value="Malta">Malta</option>
<option value="Marshall Islands">Marshall Islands</option>
<option value="Martinique">Martinique</option>
<option value="Mauritania">Mauritania</option>
<option value="Mauritius">Mauritius</option>
<option value="Mayotte">Mayotte</option>
<option value="Mexico">Mexico</option>
<option value="Micronesia">Micronesia</option>
<option value="Moldova">Moldova</option>
<option value="Monaco">Monaco</option>
<option value="Mongolia">Mongolia</option>
<option value="Montserrat">Montserrat</option>
<option value="Morocco">Morocco</option>
<option value="Mozambique">Mozambique</option>
<option value="Myanmar">Myanmar</option>
<option value="Namibia">Namibia</option>
<option value="Nauru">Nauru</option>
<option value="Nepal">Nepal</option>
<option value="Netherlands">Netherlands</option>
<option value="Netherlands Antilles">Netherlands Antilles</option>
<option value="New Caledonia">New Caledonia</option>
<option value="New Zealand">New Zealand</option>
<option value="Nicaragua">Nicaragua</option>
<option value="Niger">Niger</option>
<option value="Nigeria">Nigeria</option>
<option value="Niue">Niue</option>
<option value="Norfolk Island">Norfolk Island</option>
<option value="Northern Mariana Islands">Northern Mariana Islands</option>
<option value="Norway">Norway</option>
<option value="Oman">Oman</option>
<option value="Pakistan">Pakistan</option>
<option value="Palau">Palau</option>
<option value="Palestinian Territory">Palestinian Territory</option>
<option value="Panama">Panama</option>
<option value="Papua New Guinea">Papua New Guinea</option>
<option value="Paraguay">Paraguay</option>
<option value="Peru">Peru</option>
<option value="Philippines">Philippines</option>
<option value="Pitcairn">Pitcairn</option>
<option value="Poland">Poland</option>
<option value="Portugal">Portugal</option>
<option value="Puerto Rico">Puerto Rico</option>
<option value="Qatar">Qatar</option>
<option value="Reunion">Reunion</option>
<option value="Romania">Romania</option>
<option value="Russian Federation">Russian Federation</option>
<option value="Rwanda">Rwanda</option>
<option value="Saint Helena">Saint Helena</option>
<option value="Saint Kitts And Nevis">Saint Kitts And Nevis</option>
<option value="Saint Lucia">Saint Lucia</option>
<option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
<option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
<option value="Samoa">Samoa</option>
<option value="San Marino">San Marino</option>
<option value="Sao Tome and Principe">Sao Tome and Principe</option>
<option value="Saudi Arabia">Saudi Arabia</option>
<option value="Senegal">Senegal</option>
<option value="Serbia and Montenegro">Serbia and Montenegro</option>
<option value="Seychelles">Seychelles</option>
<option value="Sierra Leone">Sierra Leone</option>
<option value="Singapore">Singapore</option>
<option value="Slovakia">Slovakia</option>
<option value="Slovenia">Slovenia</option>
<option value="Solomon Islands">Solomon Islands</option>
<option value="Somalia">Somalia</option>
<option value="South Africa">South Africa</option>
<option value="Spain">Spain</option>
<option value="Sri Lanka">Sri Lanka</option>
<option value="Sudan">Sudan</option>
<option value="Suriname">Suriname</option>
<option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
<option value="Swaziland">Swaziland</option>
<option value="Sweden">Sweden</option>
<option value="Switzerland">Switzerland</option>
<option value="Syrian Arab Republic">Syrian Arab Republic</option>
<option value="Taiwan">Taiwan</option>
<option value="Tajikistan">Tajikistan</option>
<option value="Tanzania">Tanzania</option>
<option value="Thailand">Thailand</option>
<option value="Timor-Leste">Timor-Leste</option>
<option value="Togo">Togo</option>
<option value="Tokelau">Tokelau</option>
<option value="Tonga">Tonga</option>
<option value="Trinidad and Tobago">Trinidad and Tobago</option>
<option value="Tunisia">Tunisia</option>
<option value="Turkey">Turkey</option>
<option value="Turkmenistan">Turkmenistan</option>
<option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
<option value="Tuvalu">Tuvalu</option>
<option value="Uganda">Uganda</option>
<option value="Ukraine">Ukraine</option>
<option value="United Arab Emirates">United Arab Emirates</option>
<option value="United Kingdom">United Kingdom</option>
<option value="United States">United States</option>
<option value="Uruguay">Uruguay</option>
<option value="Uzbekistan">Uzbekistan</option>
<option value="Vanuatu">Vanuatu</option>
<option value="Venezuela">Venezuela</option>
<option value="Vietnam">Vietnam</option>
<option value="Virgin Islands">Virgin Islands</option>
<option value="Wallis and Futuna">Wallis and Futuna</option>
<option value="Western Sahara">Western Sahara</option>
<option value="Yemen">Yemen</option>
<option value="Zambia">Zambia</option>
<option value="Zimbabwe">Zimbabwe</option>
</select>
</div>
<input type="submit" id="Button1" name="" value="Send" style="position:absolute;left:129px;top:475px;width:96px;height:25px;background-color:#ECE9D8;font-family:Arial;font-size:11px;z-index:21" tabindex="14">
<input type="text" id="Editbox8" style="position:absolute;left:129px;top:100px;width:198px;height:16px;border:1px #C0C0C0 solid;font-family:Arial;font-size:11px;z-index:22" name=" Father Name" value="" tabindex="3">
<div style="position:absolute;left:129px;top:40px;width:198px;height:18px;border:1px #C0C0C0 solid;z-index:23">
<select name="occupation" size="1" id="Combobox2" style="position:absolute;left:0px;top:0px;width:100%;height:100%;border-width:0px;font-family:Arial;font-size:11px;" tabindex="2">
<option selected value="0">student</option>
<option selected value="1">professional</option>
</select>
</div>
<div id="wb_Text11" style="margin:0;padding:0;position:absolute;left:10px;top:40px;width:77px;height:16px;text-align:left;z-index:24;">
<font style="font-size:13px" color="#000000" face="Arial">Profession</font></div>
<div id="wb_Text12" style="margin:0;padding:0;position:absolute;left:10px;top:101px;width:119px;height:16px;text-align:left;z-index:25;">
<font style="font-size:13px" color="#000000" face="Arial">Father Name</font></div>
<div id="wb_Text13" style="margin:0;padding:0;position:absolute;left:10px;top:131px;width:169px;height:16px;text-align:left;z-index:26;">
<font style="font-size:13px" color="#000000" face="Arial">College / Company </font></div>
<input type="text" id="Editbox9" style="position:absolute;left:129px;top:130px;width:198px;height:16px;border:1px #C0C0C0 inset;font-family:Arial;font-size:11px;z-index:27" name="College / Company " value="" tabindex="4">
<input type="text" id="Editbox3" style="position:absolute;left:129px;top:190px;width:198px;height:16px;border:1px #C0C0C0 solid;font-family:Arial;font-size:11px;z-index:28" name="city" value="" tabindex="6">
<div style="position:absolute;left:129px;top:370px;width:198px;height:18px;border:1px #C0C0C0 solid;z-index:29">
<select name="Payment Method" size="1" id="Combobox3" style="position:absolute;left:0px;top:0px;width:100%;height:100%;border-width:0px;font-family:Arial;font-size:11px;" tabindex="12">
<option selected value="Online Transfer">Online Transfer</option>
<option selected value="Cheque">Cheque</option>
<option value="Cash">Cash</option>
</select>
</div>
<div style="position:absolute;left:127px;top:430px;width:198px;height:18px;border:1px #C0C0C0 solid;z-index:30">
<select name="Amount (Rs)" size="1" id="Combobox4" style="position:absolute;left:0px;top:0px;width:100%;height:100%;border-width:0px;font-family:Arial;font-size:11px;" tabindex="13">
<option selected value="250">250</option>
<option selected value="500">500</option>
</select>
</div>
<div id="wb_Text16" style="margin:0;padding:0;position:absolute;left:11px;top:430px;width:86px;height:16px;text-align:left;z-index:31;">
<font style="font-size:13px" color="#000000" face="Arial">Amount (Rs)</font></div>
<div id="wb_Text8" style="margin:0;padding:0;position:absolute;left:11px;top:279px;width:50px;height:16px;text-align:left;z-index:32;">
<font style="font-size:13px" color="#000000" face="Arial">Phone</font></div>
<div id="wb_Text14" style="margin:0;padding:0;position:absolute;left:11px;top:370px;width:135px;height:16px;text-align:left;z-index:33;">
<font style="font-size:13px" color="#000000" face="Arial">Payment Method</font></div>
<input type="reset" id="Button2" name="" value="Reset" style="position:absolute;left:129px;top:515px;width:96px;height:25px;background-color:#ECE9D8;font-family:Arial;font-size:11px;z-index:34" tabindex="15">
<div id="wb_Shape7" style="margin:0;padding:0;position:absolute;left:323px;top:227px;width:0px;height:0px;text-align:center;z-index:35;">
<img src="images/img0249.gif" id="Shape7" alt="" title="" style="border-width:0;width:0px;height:0px"></div>
</form>
</div>
<div id="wb_Text2" style="margin:0;padding:0;position:absolute;left:107px;top:363px;width:550px;height:38px;text-align:left;z-index:50;">
<font style="font-size:17px" color="#1E287B" face="Arial"><b>&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Online Registration Form</b></font><font style="font-size:11px" color="#000000" face="Arial"><br>
&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; </font><font style="font-size:17px" color="#000000" face="Arial"><b>Imbuent Embedded System Technology Day 2013</b></font></div>
<div id="wb_MasterPage1" style="margin:0;padding:0;position:absolute;left:2px;top:0px;width:1000px;height:291px;text-align:left;z-index:51;">
<div id="wb_Shape1" style="margin:0;padding:0;position:absolute;left:957px;top:264px;width:42px;height:24px;text-align:center;z-index:36;">
<img src="images/img0019.gif" id="Shape1" alt="" title="" style="border-width:0;width:42px;height:24px"></div>
<img src="images/img0025.jpg" id="Banner1" alt="IMBUENT TECHNOLOGIES PVT LTD" style="position:absolute;left:298px;top:24px;width:347px;height:29px;border-width:0;z-index:37">
<div id="wb_Text1" style="margin:0;padding:0;position:absolute;left:329px;top:13px;width:291px;height:14px;text-align:center;z-index:38;">
<font style="font-size:11px" color="#D50700" face="Arial"><b>Today's Solutions-Tomorrow's Technologies</b></font></div>
<div id="wb_Image2" style="margin:0;padding:0;position:absolute;left:19px;top:16px;width:100px;height:30px;text-align:left;z-index:39;">
<a href="http://www.imbuent.com"><img src="images/imbuent_100px.jpg" id="Image2" alt="" border="0" style="width:100px;height:30px;"></a></div>
<div id="wb_Image3" style="margin:0;padding:0;position:absolute;left:799px;top:9px;width:150px;height:40px;text-align:left;z-index:40;">
<a href="http://www.embeddedcraft.org"><img src="images/embeddedcraft_100pxs.jpg" id="Image3" alt="" border="0" style="width:150px;height:40px;"></a></div>
<div id="wb_Flash1" style="margin:0;padding:0;position:absolute;left:1px;top:72px;width:998px;height:40px;text-align:left;z-index:41;">
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="998" height="40" id="Flash1">
<param name="movie" value="banner2.swf">
<param name="quality" value="High">
<param name="scale" value="ExactFit">
<param name="wmode" value="Transparent">
<param name="play" value="true">
<param name="loop" value="false">
<param name="menu" value="false">
<param name="allowfullscreen" value="false">
<param name="allowscriptaccess" value="sameDomain">
<param name="sAlign" value="tl">
<embed src="banner2.swf" width="998" height="40" quality="High" wmode="Transparent" loop="false" play="true" menu="false" allowfullscreen="false" allowscriptaccess="sameDomain" scale="ExactFit" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer">
</embed>
</object>
</div>
<div id="SlideShow1" style="position:absolute;left:0px;top:103px;width:1000px;height:150px;z-index:42">
<img style="border-width:0;left:0px;top:0px;width:1000px;height:150px;" src="images/development_board.jpg" alt="" title="">
<img style="border-width:0;left:0px;top:0px;width:1000px;height:150px;display:none;" src="images/training%20program.jpg" alt="" title="">
<img style="border-width:0;left:0px;top:0px;width:1000px;height:150px;display:none;" src="images/project.jpg" alt="" title="">
</div>
<div id="wb_MenuBar2" style="margin:0;padding:0;position:absolute;left:9px;top:264px;width:987px;height:27px;text-align:left;z-index:2043;">
<div id="MenuIDMenuBar2">
<ul style="display:none">
<li><span></span><a href="http://www.imbuent.com/techday/" target="_self">Techday</a>
</li>
<li><span></span><a href="http://www.imbuent.com/techday/registernow.html" target="_self">Register&nbsp;Now</a>
</li>
<li><span></span><a href="http://www.imbuent.com/techday/agenda.html" target="_self">Agenda</a>
</li>
<li><span></span><a href="http://imbuent.com/products.html" target="_self">Products</a>

<ul>
<li><span></span><a href="http://www.imbuent.com/board8051.html" target="_self">8051&nbsp;Development&nbsp;Board</a>
</li>
<li><span></span><a href="http://www.imbuent.com/boardpic.html" target="_self">PIC&nbsp;Development&nbsp;Board</a>
</li>
<li><span></span><a href="http://imbuent.com/programmer.html#top" target="_self">Microcontroller&nbsp;Programmer</a>
</li>
<li><span></span><a href="http://imbuent.com/products.html#headerboard" target="_self">Header&nbsp;Board</a>
</li>
<li><span></span><a href="http://www.imbuent.com/s_d_card.html" target="_self">Adapter</a>
</li>
</ul>
</li>
<li><span></span><a href="http://imbuent.com/training8051.html#top" target="_self">Training&nbsp;&amp;&nbsp;Events</a>
</li>
<li><span></span><a href="http://www.imbuent.com/download.html" target="_self">Download</a>
</li>
<li><span></span><a href="http://www.imbuent.com/news/" target="_self">News</a>
</li>
<li><span></span><a href="http://www.imbuent.com/gallery/" target="_self">Gallery</a>
</li>
<li><span></span><a href="http://imbuent.com/aboutus.html" target="_self">About</a>
</li>
<li><span></span><a href="http://imbuent.com/contactus.html" target="_self">Contact&nbsp;Us</a>
</li>
</ul>
</div>
<script type="text/javascript">
<!--
var cmMenuBar2 =
{
   mainFolderLeft: '',
   mainFolderRight: '',
   mainItemLeft: '',
   mainItemRight: '',
   folderLeft: '',
   folderRight: '',
   itemLeft: '',
   itemRight: '',
   mainSpacing: 0,
   subSpacing: 0,
   delay: 100,
   offsetHMainAdjust: [0, 0],
   offsetSubAdjust: [0, 0]
};
var cmThemeMenuBar2HSplit = [_cmNoClick, '<td colspan="3" class="ThemeMenuBar2MenuSplit"><div class="ThemeMenuBar2MenuSplit"><\/div><\/td>'];
var cmThemeMenuBar2MainHSplit = [_cmNoClick, '<td colspan="3" class="ThemeMenuBar2MenuSplit"><div class="ThemeMenuBar2MenuSplit"><\/div><\/td>'];
var cmThemeMenuBar2MainVSplit = [_cmNoClick, '<div class="ThemeMenuBar2MenuVSplit">|<\/div>'];

cmMenuBar2.effect = new CMFadingEffect(30, 50);
cmDrawFromText('MenuIDMenuBar2', 'hbr', cmMenuBar2, 'ThemeMenuBar2');
-->
</script>
</div>
<div id="wb_Text2" style="margin:0;padding:0;position:absolute;left:9px;top:191px;width:632px;height:37px;text-align:left;z-index:44;">
<font style="font-size:19px" color="#1E287B" face="Arial"><b> 5<sup>th</sup> Annual Embedded System Technology Day March - 09, 2013<br>
 </b></font><font style="font-size:12px" color="#D60C00" face="Arial"><b><i>Learn. Inspire. Create</i></b></font></div>
</div>
<div id="wb_Shape1" style="margin:0;padding:0;position:absolute;left:770px;top:376px;width:232px;height:372px;text-align:center;z-index:52;">
<img src="images/img0012.gif" id="Shape1" alt="" title="" style="border-width:0;width:232px;height:372px"></div>
</body>
</html>