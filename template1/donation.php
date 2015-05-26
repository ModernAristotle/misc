<html>
 <!-- **********************  include common.php ************************ -->
 <?php
 include 'common.php';
 ?>
 <body>
 <!-- **********************  include header.php ************************ -->
 <?php
 include 'header.php';
 ?>
 <div class="maincontainer">
   <div class="lftContnr col-xs-12 col-sm-12 col-md-12">
    <div>
     <div class="hanger relPostn">
      <h3 class="fltlft hangerHdng mrgnpdng absPostn">Online Donations</h3>
     </div>
     <div class="clear"></div>
    </div>
     <div class="contentDiv contentDivPdng">
      <p style="padding: 0px 10px;">
               Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismodLorem ipsum dolor sit amet, consectetuer adipiscing elit, Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismodLorem ipsum dolor sit amet, consectetuer adipiscing elit, Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
      </p>  
      <p style="padding: 0px 10px;">
        <b>Please Note :</b>consectetuer adipiscing elit, sed diam nonummy nibh euismodLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismodLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismodLorem ipsum dolor sit amet, consectetuer adipiscing. 
      </p>  
         <div class="frmcntnr frmcntnrWdth center">
           <div class="frmHdng">
              <h3 class="">Fill your details to donate online <div class="fltrht">Fields marked with '<span class='spnStar'>*</span>' are Mandatory.</div></h3>
              <div class="clear"></div>
          </div>
   <div class="frmcntnr">
     <div class="formStatusHid">
        <div class="col-md-4 col-sm-4 col-xs-12 icondiv">
   <div id="icon1" class="fltlft fonticn_pd active khammanKlass"></div><p class="fltlft pdb">Personal Details</p>
  </div>
  <div class="col-md-4 col-sm-4 col-xs-12 icondiv">
   <div id="icon2" class="fltlft fonticn_cl khammanKlass"></div><p class="fltlft pdb">Currently Living</p>
  </div>
  <div class="col-md-4 col-sm-4 col-xs-12 icondiv">
   <div id="icon3" class="fltlft fonticn_rav khammanKlass"></div><p class="fltlft pdb">Register as Voter</p>
  </div>
    </div>
	<form method='get' action="javascript:void(0)" class="form-inline">
         <div class="prsnldtl">
         <div class="cntnr clear">
           <p class="hdng">Personal Details</p>
            <div class="form-group col-xs-12 col-sm-6 col-md-6">
       <label class="col-lg-4 pdng5">Name :</label>
       <div class="col-lg-8 pdng5">
        <input type="text" class='form-control' placeholder="Enter your name" />
        </div>
       </div>
            <div class="form-group col-xs-12 col-sm-6 col-md-6">
       <label class="col-lg-4 pdng5">Email<span class='spnStar'>*</span>:</label>
       <div class="col-lg-8 pdng5">
         <input type="email" class='form-control' placeholder="Enter email ID" />
        </div>
        </div>
            <div class="form-group col-xs-12 col-sm-6 col-md-6">
       <label class="col-lg-4 pdng5">Gender:</label>
       <div class="col-lg-8 pdng5">
        <select class="form-control">
         <option>---select---</option>
         <option>Male</option>
         <option>Female</option>
         <option>Other</option>
        </select>
        </div>
       </div>
            <div class="form-group col-xs-12 col-sm-6 col-md-6">
       <label class="col-lg-4 pdng5">ID Card Detail:</label>
       <div class="col-lg-8 pdng5">
        <select class="form-control frmElWdth50">
         <option>Card Type</option>
         <option>Debit Card</option>
         <option>Credit Card</option>
         <option>Visa Card</option>
         <option>Master Card</option>
        </select>
        <input type="text" class="form-control frmElWdth50"  placeholder="ID Card Number"/>
        </div>
        </div>
<div class="form-group col-xs-12 col-sm-6 col-md-6">
       <label class="col-lg-4 pdng5">Mobile<span class='spnStar'>*</span>:</label>
       <div class="col-lg-8 pdng5">
        <input type="text" class='form-control' placeholder="Enter mobile number" />
        </div>
        </div>
           <div class="form-group col-xs-12 col-sm-6 col-md-6">
           <label class="col-lg-4 pdng5">DOB:</label>
       <div class="col-lg-8 pdng5"> 
        <input type="text" class='form-control' placeholder="Enter Date of birth"/>
        </div>
        </div>
           <div class="form-group col-xs-12 col-sm-6 col-md-6">
       <label class="col-lg-4 pdng5">Father's Name:</label>
       <div class="col-lg-8 pdng5">
        <input type="text" class='form-control' placeholder="Enter your father's name" />
        </div>
        </div>
           <div class="form-group col-xs-12 col-sm-6 col-md-6">
        <label class="col-lg-4 pdng5">Mother's Name:</label>
        <div class="col-lg-8 pdng5">
         <input type="text" class='form-control' placeholder="Enter your mother's name" />
        </div>
        </div>
            <div class="form-group col-xs-12 col-sm-6 col-md-6 col-md-offset-2">
             <label for="" style="text-align: left;"><input type="checkbox" nm="chkbx" class="chkbx" />&nbsp; I am NRI</label>
            </div>
           <div class="clear"></div>
           </div>
    <input type="button" value="Next" class="nxtbtn btnnxtprv fltrht"  name="fonticn_cl"/>
    <div class="clear"></div>
    </div>
    <div class="clear"></div>

   <!------ currently living-------->
   <div class="crntlvng"  style="display:none;">
    <div class="cntnr clear">
     <p class="hdng">Currently Living</p>
     <div class="form-group col-xs-12 col-sm-6 col-md-6">
       <label class="col-lg-4 pdng5">State:</label>
       <div class="col-lg-8 pdng5">
         <select class="form-control">
         <option>ID Card Type</option>
         <option>Male</option>
         <option>Female</option>
         <option>Other</option>
        </select>
        </div>
        </div>
     <div class="form-group col-xs-12 col-sm-6 col-md-6">
      <label class="col-lg-4 pdng5">District:</label>
      <div class="col-lg-8 pdng5">
         <select class="form-control">
         <option>ID Card Type</option>
         <option>Male</option>
         <option>Female</option>
         <option>Other</option>
        </select>
        </div>
       </div>
     <div class="form-group col-xs-12 col-sm-6 col-md-6">
       <label class="col-lg-4 pdng5">Parliament Constituency:</label>
       <div class="col-lg-8 pdng5">
         <select class="form-control">
         <option>ID Card Type</option>
         <option>Male</option>
         <option>Female</option>
         <option>Other</option>
        </select>
        </div>
       </div>
     <div class="form-group col-xs-12 col-sm-6 col-md-6">
       <label class="col-lg-4 pdng5">Assembly Constituency:</label>
      <div class="col-lg-8 pdng5">
         <select class="form-control">
         <option>ID Card Type</option>
         <option>Male</option>
         <option>Female</option>
         <option>Other</option>
        </select>
        </div>
      </div>
       <div class='clear'></div>
         </div>
        <input type="button" value="Previous" class="prevBtn btnnxtprv fltlft"  name="fonticn_pd"/>
       <input type="button" value="Next" class="nxtbtn1 btnnxtprv fltrht" name="fonticn_rav" />
       <div class='clear'></div>
   </div>
     
     <!------ Payment Details-------->
     <div class="rgstrvtr" style="display:none;">
     <div class="cntnr clear">
           <p class="hdng">Payment Details</p>
             <div class="form-group col-xs-12 col-sm-6 col-md-6">
                  <label class="col-lg-4 pdng5">Donation to<span class='spnStar'>*</span>:</label>
                  <div class="col-lg-8 pdng5">
         <select class="form-control">
                      <option selected="selected">National</option>
                      <option>Andaman & Nikobar</option>
                      <option>Andhra Pradesh</option>
                     </select>
                    </div>
                   </div>
           <div class="form-group col-xs-12 col-sm-6 col-md-6">
                   <label class="col-lg-4 pdng5">Amount<span class='spnStar'>*</span>:</label>
                   <div class="col-lg-8 pdng5">
         <input type="text" class='form-control' placeholder="Rs."/>
                      </div>
                     </div>
           <div class="form-group col-xs-12 col-sm-6 col-md-6">
                <label class="col-lg-4 pdng5">Pay by<span class='spnStar'>*</span>:</label>
                <div class="col-lg-8 pdng5">
         <select class="form-control">
          <option>---Select payment mode---</option>
                       <option>Credit Card</option>
                       <option>Debit Card</option>
                       <option>Visa Card</option>
                       <option>Master Card</option></select>
                    </div>
                   </div>
           <div class="form-group col-xs-12 col-sm-6 col-md-6">
                   <label class="col-lg-4 pdng5">Remark<span class='spnStar'>*</label>
                   <div class="col-lg-8 pdng5">
         <textarea placeholder="Write your remarks" class="form-control"></textarea>
                  </div>
                  </div>
           <div class="form-group col-xs-12 col-sm-6 col-md-6">
                         <label style="font-weight: normal; text-align: left;">
                    <input type='checkbox' name='declaration' />&nbsp; I declare that I am an Indian citizen, above 18 years of age and am making this payment. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.
                     </label>
                       </div>
          <div class='clear'></div>
         </div>
          <div align='center'>
           <input type="button" value="Previous" class="btnnxtprv prevBtn1 fltlft" name="fonticn_cl" />
           <input type="submit" value="DONATE" class="btnDonate" />
          </div>
          <div class='clear'></div>
     </div>  
        </form>
   </div>
        </div>
      <div align='center' class="helpMsg">
          If you are facing any problem <br />Call us at +91 7210222333 or email us at<br /> donate@swarajabhiyan.org
      </div>
      <br />
       <div align='justify' style='padding: 10px; background: #E6E8EC;'>
           Dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismodLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet...Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.  dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismodLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet...Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
      </div>
      <br />
      <br />
      <br />
      <div class="" style="border-top: 1px solid #cecece; text-align: center; padding: 5px 0px 0px;">
          <img src='images/paymentfooter.png' style="max-width: 100%;" />
      </div>
    </div>
    </div>
 <div class="clear"></div>
    </div>
 <div class="clear"></div>
   <?php
  /*******************  include footer.php ************************/  
  include 'footer.php';
  ?>