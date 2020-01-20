<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet"type="text/css"href="style.css">
<title>Page Title</title>


</head>
<body>


<h1 class="title">Brooklyn Academy Invoice (Payment)</h1>
<br>


<h2 class="tit">Payment Certificate material ID</h2>




<div>
<form action="process.php" method="POST">
<lable>Student Number</lable>
  <input type="Number" name="StudentNumber" required="Number">
<br><br>




<lable>Type of Invoice </lable>
<br><br>

   <select id="type" name="InvoiceType" required>
    <option >choose</option>
    <option value="certificate">certificate</option>
    <option value="material">material</option>
    <option value="payment">payment</option>
</select>
  <br><br>





<lable>Payment Subcategories </lable>
<br><br>
   <select id="Payment" name="Payment" required>
    <option >choose</option>
    <option value="id">id</option>
    <option value="ReTest">ReTest</option>
    <option value="lecture">lecture</option>
    <option value="deadline">deadline</option>
    <option value="international exam">international exam</option>
    <option value="0">0</option>

    </select>

   <br><br>






   <lable>Amount</lable>
  <input type="Number" name="Amount" required>

  <br><br>






   <lable>Amount with letters </lable>
  <input type="text" name="Amountletters" required>
 <br><br>





<lable>Scholarship</lable>
<br><br>
  
    
    <select id="Scholarship" name="Scholarship" required>
    <option >choose</option>
    <option value="PMP"> PMP </option>
    <option value="TQM">TQM  </option>
    <option value="SCM"> SCM </option>
    <option value="Hvac">Hvac </option>
    <option value="MBA"> MBA </option>
    <option value="Cma">Cma </option>
    <option value="CME"> CME </option>
    <option value="HR"> HR  </option>
    <option value="Mini MBA">Mini MBA </option>
    <option value="DBA">  DBA </option>
    <option value="6 sigma bb"> 6 sigma bb </option>
    </select>


  <br><br>



<lable>Student Type</lable>
<br><br>
   <select id="type" name="StudentType" required>
      <option >choose</option>
      <option value="Fresh">Fresh</option>
      <option value="Student">Student</option>
    </select>










 <br><br> 




  <h1 class="tit">Groups Codes </h1>





  <lable>Code group 1 </lable>
  <input type="Number" name="CodeGroup" required>
 <br><br>


<leble> Study type </lable>
  <br><br>
    <select id="type" name="Studytype" required>
    <option >choose</option>
    <option value="online">online</option>
    <option value="normal">normal</option>
    </select>





  <h1 class="tit">Deadline</h1>




  <lable>Deadline 1</lable>
  <input type="date" name="Deadline" required> 


 <br><br>

  <lable>Notes</lable>
  <input type="text" name="Notes" value="">


  <lable>Receptionist</lable>
  <input type="text" name="Receptionist" value="" required>



  <lable>payment Method </lable>
  <select name="paymentMethod" required>
    <option >choose</option>
    <option value="cash">cash</option>
    <option value="vodafone cash">vodafone cash</option>

</select>


  <lable>scholarship code</lable>
  <input type="text" name="ScholarshipCode" value="">

  <br>  <br> 


<input type="submit"  id="btn" value="submit" name="submit">
</form>
</div>







</body>
</html>