@extends('layout')

@section('content')
<div id="formWrapper">
<div id="body"><br><br>
	<div id="simulasi">
		<div class="drop"><h3>SIMULASI PC RAKITAN</h3></div>
		<div class="custom-dropdown">
		<form name="me" action="print.php" method="post">
		<table width="100%">
        
	
	            <td width='70%'><select name='n1' id='s1' onchange="updateHargax(this,document.getElementById('q1'),document.getElementById('p1'),document.getElementById('nex1')); check()";  >
	                <option value='0'>---AMD AM4 ---</option>
	                <option value='810000'>Intel Pentium Gold G5420 3.8Ghz Coffee Lake (Rp. 810.000)</option>
	                <option value='2550000'>0 1 (Rp. 2.550.000)</option>
	                <option value='3600000'>0 2 (Rp. 3.600.000)</option>
	              </select><input name='name1' id='nex1' type='hidden' value='0'></td>
	            <td width='10%'><select name='qty1' id='q1' onchange="updateHarga(this.value, document.getElementById('s1'),document.getElementById('p1'))">
	                <option value='1'>1 pcs</option>
	                <option value='2'>2 pcs</option>
	                <option value='3'>3 pcs</option>
	                <option value='4'>4 pcs</option>
	                <option value='5'>5 pcs</option>
	                <option value='6'>6 pcs</option>
	                <option value='7'>7 pcs</option>
	                <option value='8'>8 pcs</option>
	                <option value='9'>9 pcs</option>
	              </select></td>
	            <td width='20%'><input id='p1' class='form__input' type='text' value='0' styles='text-align:right;' disabled></td>
	          </tr>
	          <tr>
	            <td width='70%'><select name='n2' id='s2' onchange="updateHargax(this,document.getElementById('q2'),document.getElementById('p2'),document.getElementById('nex2')); Acheck();"  >
	                <option value='0'>---AMD Str ---</option>
	                <option value='550000'>Galax Geforce GT 710 1GB DDR3 (Rp. 550.000)</option>
	                <option value='5525000'>Gigabyte Radeon RX 5600 XT 6GB DDR6 Gaming OC (Rp. 5.525.000 </option>
	              </select><input name='name2' id='nex2' type='hidden' value='0'></td>
	            <td width='10%'><select name='qty2' id='q2' onchange="updateHarga(this.value, document.getElementById('s2'),document.getElementById('p2'))">
	                <option value='1'>1 pcs</option>
	                <option value='2'>2 pcs</option>
	                <option value='3'>3 pcs</option>
	                <option value='4'>4 pcs</option>
	                <option value='5'>5 pcs</option>
	                <option value='6'>6 pcs</option>
	                <option value='7'>7 pcs</option>
	                <option value='8'>8 pcs</option>
	                <option value='9'>9 pcs</option>
	              </select></td>
	            <td width='20%'><input id='p2' class='form__input' type='text' value='0' styles='text-align:right;' disabled></td>
	          </tr>
	          <tr>
	            <td width='70%'><select name='n3' id='s3' onchange="updateHargax(this,document.getElementById('q3'),document.getElementById('p3'),document.getElementById('nex3')) Bcheck();">
	                <option value='0'>---  Amd Tr  ---</option>
	                <option value='280000'>ADATA DDR4 Value Series PC21330 2666MHz 4GB [1x4GB] (Rp. 280.000)</option>
	                <option value='2520000'>Kingston DDR4 Hyper X Fury PC25600 3200MHz 32GB [2x16GB] RGB (Rp. 2.520.000)</option>
	                <option value='680000'>0 (Rp. 680.000)</option>
	              </select><input name='name3' id='nex3' type='hidden' value='0'></td>
	            <td width='10%'><select name='qty3' id='q3' onchange="updateHarga(this.value, document.getElementById('s3'),document.getElementById('p3'))">
	                <option value='1'>1 pcs</option>
	                <option value='2'>2 pcs</option>
	                <option value='3'>3 pcs</option>
	                <option value='4'>4 pcs</option>
	                <option value='5'>5 pcs</option>
	                <option value='6'>6 pcs</option>
	                <option value='7'>7 pcs</option>
	                <option value='8'>8 pcs</option>
	                <option value='9'>9 pcs</option>
	              </select></td>
	            <td width='20%'><input id='p3' class='form__input' type='text' value='0' styles='text-align:right;' disabled></td>
	          </tr>
	          <tr>
	            <td width='70%'><select name='n4' id='s4' onchange="updateHargax(this,document.getElementById('q4'),document.getElementById('p4'),document.getElementById('nex4')); Ccheck();">
	                <option value='0'>--- Intel Lga 2066  ---</option>
	                <option value='690000'>Seasonic S12II-450 Evo 80+ Bronze (Rp. 690.000)</option>
	                <option value='2295000'>Enermax Platimax DF 750W 80+ Platinum (Rp. 2.295.000)</option>
	              </select><input name='name4' id='nex4' type='hidden' value='0'></td>
	            <td width='10%'><select name='qty4' id='q4' onchange="updateHarga(this.value, document.getElementById('s4'),document.getElementById('p4'))">
	                <option value='1'>1 pcs</option>
	                <option value='2'>2 pcs</option>
	                <option value='3'>3 pcs</option>
	                <option value='4'>4 pcs</option>
	                <option value='5'>5 pcs</option>
	                <option value='6'>6 pcs</option>
	                <option value='7'>7 pcs</option>
	                <option value='8'>8 pcs</option>
	                <option value='9'>9 pcs</option>
	              </select></td>
	            <td width='20%'><input id='p4' class='form__input' type='text' value='0' styles='text-align:right;' disabled></td>
	          </tr>
	          <tr>
	            <td width='70%'><select name='n5' id='s5' onchange="updateHargax(this,document.getElementById('q5'),document.getElementById('p5'),document.getElementById('nex5')); Dcheck();">
	                <option value='0'>--- Intel LGA 1200 ---</option>
	                <option value='0'>WDC 3.5" 500GB SATA3 - Caviar Blue (Rp. 0)</option>
	                <option value='2260000'>Sandisk Extreme 500 Portable SSD 480GB (Rp. 2.260.000)</option>
	                <option value='870000'>0 (Rp. 870.000)</option>
	              </select><input name='name5' id='nex5' type='hidden' value='0'></td>
	            <td width='10%'><select name='qty5' id='q5' onchange="updateHarga(this.value, document.getElementById('s5'),document.getElementById('p5'))">
	                <option value='1'>1 pcs</option>
	                <option value='2'>2 pcs</option>
	                <option value='3'>3 pcs</option>
	                <option value='4'>4 pcs</option>
	                <option value='5'>5 pcs</option>
	                <option value='6'>6 pcs</option>
	                <option value='7'>7 pcs</option>
	                <option value='8'>8 pcs</option>
	                <option value='9'>9 pcs</option>
	              </select></td>
	            <td width='20%'><input id='p5' class='form__input' type='text' value='0' styles='text-align:right;' disabled></td>
	          </tr>
	          <tr>
	            <td width='70%'><select name='n6' id='s6' onchange="updateHargax(this,document.getElementById('q6'),document.getElementById('p6'),document.getElementById('nex6')); Echeck();">>
	                <option value='0'>-- Intel LGA 1511 ---</option>
	                <option value='1195000'>MSI H410M Pro (Rp. 1.195.000)</option>
	                <option value='990000'>Galax B450M (Rp. 990.000)</option>
	              </select><input name='name6' id='nex6' type='hidden' value='0'></td>
	            <td width='10%'><select name='qty6' id='q6' onchange="updateHarga(this.value, document.getElementById('s6'),document.getElementById('p6'))">
	                <option value='1'>1 pcs</option>
	                <option value='2'>2 pcs</option>
	                <option value='3'>3 pcs</option>
	                <option value='4'>4 pcs</option>
	                <option value='5'>5 pcs</option>
	                <option value='6'>6 pcs</option>
	                <option value='7'>7 pcs</option>
	                <option value='8'>8 pcs</option>
	                <option value='9'>9 pcs</option>
	              </select></td>
	            <td width='20%'><input id='p6' class='form__input' type='text' value='0' styles='text-align:right;' disabled></td>
	          </tr>
	          <tr>
	            <td width='70%'><select disabled name='n7' id='s7' onchange="updateHargax(this,document.getElementById('q7'),document.getElementById('p7'),document.getElementById('nex7'))">
	                <option value='0'>--- Mobo Am4 ---</option>
	                <option value='690000'>Seasonic S12II-450 Evo 80+ Bronze (Rp. 690.000)</option>
	                <option value='2295000'>Enermax Platimax DF 750W 80+ Platinum (Rp. 2.295.000)</option>
	              </select><input name='name7' id='nex7' type='hidden' value='0'></td>
	            <td width='10%'><select name='qty7' id='q7' onchange="updateHarga(this.value, document.getElementById('s7'),document.getElementById('p7'))">
	                <option value='1'>1 pcs</option>
	                <option value='2'>2 pcs</option>
	                <option value='3'>3 pcs</option>
	                <option value='4'>4 pcs</option>
	                <option value='5'>5 pcs</option>
	                <option value='6'>6 pcs</option>
	                <option value='7'>7 pcs</option>
	                <option value='8'>8 pcs</option>
	                <option value='9'>9 pcs</option>
	              </select></td>
	            <td width='20%'><input id='p7' class='form__input' type='text' value='0' styles='text-align:right;' disabled></td>
	          </tr>
	          <tr>
	            <td width='70%'><select disabled name='n8' id='s8' onchange="updateHargax(this,document.getElementById('q8'),document.getElementById('p8'),document.getElementById('nex8'))">
	                <option value='0'>--- Mobo Str ---</option>
	                <option value='310000'>Cube Gaming Blig + PSU 500W (Support ATX Size) (Rp. 310.000)</option>
	                <option value='480000'>0 (Rp. 480.000)</option>
	                <option value='355000'>0 (Rp. 355.000)</option>
	                <option value='850000'>0 (Rp. 850.000)</option>
	              </select><input name='name8' id='nex8' type='hidden' value='0'></td>
	            <td width='10%'><select name='qty8' id='q8' onchange="updateHarga(this.value, document.getElementById('s8'),document.getElementById('p8'))">
	                <option value='1'>1 pcs</option>
	                <option value='2'>2 pcs</option>
	                <option value='3'>3 pcs</option>
	                <option value='4'>4 pcs</option>
	                <option value='5'>5 pcs</option>
	                <option value='6'>6 pcs</option>
	                <option value='7'>7 pcs</option>
	                <option value='8'>8 pcs</option>
	                <option value='9'>9 pcs</option>
	              </select></td>
	            <td width='20%'><input id='p8' class='form__input' type='text' value='0' styles='text-align:right;' disabled></td>
	          </tr>
	          <tr>
              
	            <td width='70%'><select  disabled name='n9' id='s9'  onchange="updateHargax(this,document.getElementById('q9'),document.getElementById('p9'),document.getElementById('nex9'));"  >
	                <option value='0'>---MOBO Tr ---</option>
	                <option value='840000'>LG 19" 19M38A (Rp. 840.000)</option>
	                
	                <option value='21005000'>ASUS 34" PG348Q - ROG Swift 4K Gaming Monitor (Rp. 21.005.000)</option>
	              </select><input name='name9' id='nex9' type='hidden' value='0'></td>
	            <td width='10%'><select name='qty9' id='q9' onchange="updateHarga(this.value, document.getElementById('s9'),document.getElementById('p9'))">
	                <option value='1'>1 pcs</option>
	                <option value='2'>2 pcs</option>
	                <option value='3'>3 pcs</option>
	                <option value='4'>4 pcs</option>
	                <option value='5'>5 pcs</option>
	                <option value='6'>6 pcs</option>
	                <option value='7'>7 pcs</option>
	                <option value='8'>8 pcs</option>
	                <option value='9'>9 pcs</option>
	              </select></td>
	            <td width='20%'><input id='p9' class='form__input' type='text' value='0' styles='text-align:right;' disabled></td>
	          </tr>
	          <tr>
	            <td width='70%'><select  disabled name='n10' id='s10' onchange="updateHargax(this,document.getElementById('q10'),document.getElementById('p10'),document.getElementById('nex10')); Ccheck();"  >
	                <option value='0'>--- Mobo 2066 ---</option>
	                <option value='100'>LG DVDRW 24X SATA - [BOX] (Rp. 0)</option>
	                <option value='290000'>LG DVDRW External Slim (Rp. 290.000)</option>
	              </select><input name='name10' id='nex10' type='hidden' value='0'></td>
	            <td width='10%'><select name='qty10' id='q10' onchange="updateHarga(this.value, document.getElementById('s10'),document.getElementById('p10'))">
	                <option value='1'>1 pcs</option>
	                <option value='2'>2 pcs</option>
	                <option value='3'>3 pcs</option>
	                <option value='4'>4 pcs</option>
	                <option value='5'>5 pcs</option>
	                <option value='6'>6 pcs</option>
	                <option value='7'>7 pcs</option>
	                <option value='8'>8 pcs</option>
	                <option value='9'>9 pcs</option>
	              </select></td>
	            <td width='20%'><input id='p10' class='form__input' type='text' value='0' styles='text-align:right;' disabled></td>
	          </tr>
	          <tr>
	            <td width='70%'><select disabled name='n11' id='s11' onchange="updateHargax(this,document.getElementById('q11'),document.getElementById('p11'),document.getElementById('nex11')); Dcheck();">
	                <option value='0'>--- mobo 1200 ---</option>
	                <option value='150000'>1STPLAYER Gaming Keyboard FIREDANCING K5 (Rp. 150.000)</option>
	                <option value='245000'>Power Logic Armageddon Kalashnikov AK550i (Rp. 245.000)</option>
	                <option value='310000'>Power Logic Armageddon Kalashnikov AK990i (Rp. 310.000)</option>
	                <option value='510000'>0 (Rp. 510.000)</option>
	              </select><input name='name11' id='nex11' type='hidden' value='0'></td>
	            <td width='10%'><select name='qty11' id='q11' onchange="updateHarga(this.value, document.getElementById('s11'),document.getElementById('p11'))">
	                <option value='1'>1 pcs</option>
	                <option value='2'>2 pcs</option>
	                <option value='3'>3 pcs</option>
	                <option value='4'>4 pcs</option>
	                <option value='5'>5 pcs</option>
	                <option value='6'>6 pcs</option>
	                <option value='7'>7 pcs</option>
	                <option value='8'>8 pcs</option>
	                <option value='9'>9 pcs</option>
	              </select></td>
	            <td width='20%'><input id='p11' class='form__input' type='text' value='0' styles='text-align:right;' disabled></td>
	          </tr>
	          <tr>
	            <td width='70%'><select disabled name='n12' id='s12' onchange="updateHargax(this,document.getElementById('q12'),document.getElementById('p12'),document.getElementById('nex12')); Echeck();">>
	                <option value='0'>--- Mobo 1511 ---</option>
	                <option value='1980000'>1STPLAYER Gaming Chair K2 - Black (Rp. 1.980.000)</option>
	                <option value='2350000'>1STPLAYER Gaming Chair DK1 - Black (Rp. 2.350.000)</option>
	                <option value='2350000'>1STPLAYER Gaming Chair DK1 - Black Red (Rp. 2.350.000)</option>
	                <option value='2950000'>MSI MAG CH120 Gaming Chair - Black Red (Rp. 2.950.000)</option>
	              </select><input name='name12' id='nex12' type='hidden' value='0'></td>
	            <td width='10%'><select name='qty12' id='q12' onchange="updateHarga(this.value, document.getElementById('s12'),document.getElementById('p12'))">
	                <option value='1'>1 pcs</option>
	                <option value='2'>2 pcs</option>
	                <option value='3'>3 pcs</option>
	                <option value='4'>4 pcs</option>
	                <option value='5'>5 pcs</option>
	                <option value='6'>6 pcs</option>
	                <option value='7'>7 pcs</option>
	                <option value='8'>8 pcs</option>
	                <option value='9'>9 pcs</option>
	              </select></td>
	            <td width='20%'><input id='p12' class='form__input' type='text' value='0' styles='text-align:right;' disabled></td>
	          </tr>
	          <tr>
	            <td width='70%'><select name='n13' id='s13' onchange="updateHargax(this,document.getElementById('q13'),document.getElementById('p13'),document.getElementById('nex13'))">
	                <option value='0'>--- Graphic card ---</option>
	                <option value='7000000'>Rtx 3070 Founder Edition (Rp7,000,000)</option>
	                <option value='115000'>ID-Cooling WF-14025 140mm PWM Fan (Rp. 115.000)</option>
	                <option value='55000'>0 (Rp. 55.000)</option>
	                <option value='50000'>0 (Rp. 50.000)</option>
	                <option value='55000'>0 (Rp. 55.000)</option>
	                <option value='55000'>0 (Rp. 55.000)</option>
	                <option value='55000'>0 (Rp. 55.000)</option>
	                <option value='85000'>0 (Rp. 85.000)</option>
	                <option value='95000'>0 (Rp. 95.000)</option>
	              </select><input name='name13' id='nex13' type='hidden' value='0'></td>
	            <td width='10%'><select name='qty13' id='q13' onchange="updateHarga(this.value, document.getElementById('s13'),document.getElementById('p13'))">
	                <option value='1'>1 pcs</option>
	                <option value='2'>2 pcs</option>
	                <option value='3'>3 pcs</option>
	                <option value='4'>4 pcs</option>
	                <option value='5'>5 pcs</option>
	                <option value='6'>6 pcs</option>
	                <option value='7'>7 pcs</option>
	                <option value='8'>8 pcs</option>
	                <option value='9'>9 pcs</option>
	              </select></td>
	            <td width='20%'><input id='p13' class='form__input' type='text' value='0' styles='text-align:right;' disabled></td>
	          </tr>
	          <tr>
	            <td width='70%'><select name='n14' id='s14' onchange="updateHargax(this,document.getElementById('q14'),document.getElementById('p14'),document.getElementById('nex14'))">
	                <option value='0'>--- Random acces memory ---</option>
	                <option value='2000000'>Windows 10 Home OEM - 32 / 64 Bit (Rp. 2.000.000)</option>
	                <option value='255000'>Norton Internet Security 2013 - 1 User (Rp. 255.000)</option>
	              </select><input name='name14' id='nex14' type='hidden' value='0'></td>
	            <td width='10%'><select name='qty14' id='q14' onchange="updateHarga(this.value, document.getElementById('s14'),document.getElementById('p14'))">
	                <option value='1'>1 pcs</option>
	                <option value='2'>2 pcs</option>
	                <option value='3'>3 pcs</option>
	                <option value='4'>4 pcs</option>
	                <option value='5'>5 pcs</option>
	                <option value='6'>6 pcs</option>
	                <option value='7'>7 pcs</option>
	                <option value='8'>8 pcs</option>
	                <option value='9'>9 pcs</option>
	              </select></td>
	            <td width='20%'><input id='p14' class='form__input' type='text' value='0' styles='text-align:right;' disabled></td>
	          </tr>
	          <tr>
	            <td width='70%'><select name='n15' id='s15' onchange="updateHargax(this,document.getElementById('q15'),document.getElementById('p15'),document.getElementById('nex15'))">
	                <option value='0'>--- Power suplies ---</option>
                <option value='720000'>Cooler Master MasterNotepal Maker (Rp. 720.000)</option>
	                <option value='385000'>Deepcool Multi Core X8 (Rp. 385.000)</option>
	              </select><input name='name15' id='nex15' type='hidden' value='0'></td>
	            <td width='10%'><select name='qty15' id='q15' onchange="updateHarga(this.value, document.getElementById('s15'),document.getElementById('p15'))">
	                <option value='1'>1 pcs</option>
	                <option value='2'>2 pcs</option>
	                <option value='3'>3 pcs</option>
	                <option value='4'>4 pcs</option>
	                <option value='5'>5 pcs</option>
	                <option value='6'>6 pcs</option>
	                <option value='7'>7 pcs</option>
	                <option value='8'>8 pcs</option>
	                <option value='9'>9 pcs</option>
	              </select></td>
	            <td width='20%'><input id='p15' class='form__input' type='text' value='0' styles='text-align:right;' disabled></td>
	          </tr>
	          <tr>
	            <td width='70%'><select name='n16' id='s16' onchange="updateHargax(this,document.getElementById('q16'),document.getElementById('p16'),document.getElementById('nex16'))">
	                <option value='0'>-- Display ---</option>
	                <option value='285000'>Adata UV128 / UV150 64GB - USB 3.0 (Rp. 285.000)</option>
	                <option value='405000'>Adata UV128 / UV150 128GB - USB 3.0 (Rp. 405.000)</option>
	              </select><input name='name16' id='nex16' type='hidden' value='0'></td>
	            <td width='10%'><select name='qty16' id='q16' onchange="updateHarga(this.value, document.getElementById('s16'),document.getElementById('p16'))">
	                <option value='1'>1 pcs</option>
	                <option value='2'>2 pcs</option>
	                <option value='3'>3 pcs</option>
	                <option value='4'>4 pcs</option>
	                <option value='5'>5 pcs</option>
	                <option value='6'>6 pcs</option>
	                <option value='7'>7 pcs</option>
	                <option value='8'>8 pcs</option>
	                <option value='9'>9 pcs</option>
	              </select></td>
	            <td width='20%'><input id='p16' class='form__input' type='text' value='0' styles='text-align:right;' disabled></td>
	          </tr>
	          <tr>
	            <td width='70%'><select name='n17' id='s17' onchange="updateHargax(this,document.getElementById('q17'),document.getElementById('p17'),document.getElementById('nex17'))">
	                <option value='0'>--- Storage ---</option>
	                <option value='84000'>Sandisk MicroSD Ultra 16GB Class 10 80MB Non Adapter (Rp. 84.000)</option>
	                <option value='460000'>Samsung MicroSD Pro 32GB Class 10 (Rp. 460.000)</option>
	                <option value='580000'>Samsung MicroSD Pro 64GB Class 10 (Rp. 580.000)</option>
	              </select><input name='name17' id='nex17' type='hidden' value='0'></td>
	            <td width='10%'><select name='qty17' id='q17' onchange="updateHarga(this.value, document.getElementById('s17'),document.getElementById('p17'))">
	                <option value='1'>1 pcs</option>
	                <option value='2'>2 pcs</option>
	                <option value='3'>3 pcs</option>
	                <option value='4'>4 pcs</option>
	                <option value='5'>5 pcs</option>
	                <option value='6'>6 pcs</option>
	                <option value='7'>7 pcs</option>
	                <option value='8'>8 pcs</option>
	                <option value='9'>9 pcs</option>
	              </select></td>
	            <td width='20%'><input id='p17' class='form__input' type='text' value='0' styles='text-align:right;' disabled></td>
	          </tr>
	                
	    
	          <tr>
	            <td width='70%'><b>TOTAL</b><input name='totalx' id='totalx' type='hidden' value='17'></td>
	            <td width='10%'><b>Rp. </b></td>
	            <td width='20%'><input name='totali' id='totali' class='form__input' type='text' value='0' styles='text-align:right; text-weight:bold;' disabled></td>
	          </tr>
	          <tr>
	            <td width='70%'>&nbsp;</td>
	            <td width='10%'>&nbsp;</td>
	            <td width='20%'></a></td>
	          </tr>
	        </table>
	      </form>
	      <a name='TOTAL'></a>
    	<div class="clear-fix"></div>
		<td width='20%'><input type='Submit' name='PrintPrev' id='Submit' value='Print Preview'></td>
    </div>
</div>
</div>    
	    </div>
	  </div>
	</div> <!-- end of wrapping -->
 </div>


@stop

@section('extra-js')
<script src="{{ asset('js/rakit.js') }}"></script>
@stop

@section('extra-css')
<link rel="stylesheet" href="{{ asset('css/rakit.css') }}">
@stop