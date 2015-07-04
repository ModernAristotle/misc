<!DOCTYPE html>
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
      <h3 class="fltlft hangerHdng mrgnpdng absPostn">NSC/NWC Member Details</h3>
     </div>
     <div class="clear"></div>
    </div>
    <div class="contentDiv newsPad" style="overflow: visible !important;"><!--------changed by soumya------->
     <div class="newsCont" style="overflow-x: auto; padding-top: 8px;">
      <table width="100%" class="tblMemberDetails" cellpadding="3" cellspacing="0" border="0" style="min-width: 700px;">
         <tr>
          <th>Name</th>
          <th>Email ID</th>
          <th>Address</th>
          <th>Phone No.</th>
        </tr>
        <tr>
         <td><div class="memberName relPostn">Akshaya Kumar Satapathy<input type="hidden" class="hdnFld" value="member/akshaya.jpg" /></div></td>
         <td class="memberEmail">akshaya.satapathy@afixi.com</td>
         <td class="memberAddress">
          Narayanpur Sashan, <br />
          Kabisurya Nagar <br />
          Ganjam, <br />
          Odisha - 761104          
         </td>
         <td class="memberPhone">8342099529</td>
        </tr>
        <tr>
         <td><div class="memberName relPostn">Suryakanta Nayak<input type="hidden" class="hdnFld" value="member/akshaya.jpg" /></div></td>
         <td class="memberEmail">suryakanta.nayak@afixi.com</td>
         <td class="memberAddress">Puri</td>
         <td class="memberPhone">1234567890</td>
        </tr>
        <tr>
         <td><div class="memberName relPostn">Soumyashree Panda<input type="hidden" class="hdnFld" value="member/soumya.jpg" /></div></td>
         <td class="memberEmail">soumyashree.panda@afixi.com</td>
         <td class="memberAddress">Khurdha</td>
         <td class="memberPhone">0123456789</td>
        </tr>
        <tr>
         <td><div class="memberName relPostn">Upasana Sadashya<input type="hidden" class="hdnFld" value="member/upasana.jpg" /></div></td>
         <td class="memberEmail">upasana.sadashya@afixi.com</td>
         <td class="memberAddress">Nayagarh</td>
         <td class="memberPhone">3215654522</td>
        </tr>
      </table>
     </div>
    </div>
   </div>
<!--    *******************  include rightpannel.php ************************   
   <?php
//   include 'rightpannel.php';
   ?>     -->
   <div class="clear"></div>
  </div>
  <?php
  /*******************  include footer.php ************************/  
  include 'footer.php';
  ?>
 </body>
</html>
