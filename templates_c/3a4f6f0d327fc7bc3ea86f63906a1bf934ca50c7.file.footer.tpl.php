<?php /* Smarty version Smarty-3.0.6, created on 2012-05-15 12:29:29
         compiled from "./templates/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:129404fb0324b358393-97625276%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a4f6f0d327fc7bc3ea86f63906a1bf934ca50c7' => 
    array (
      0 => './templates/footer.tpl',
      1 => 1337027664,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '129404fb0324b358393-97625276',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
				</div>
				
				<div class="right_menu">
					<div class="rightsection">
						<div class="sectionname">Najlepsze oferty</div>
						<div class="topproducts">
							<a href="http://polltyka.com.pl/bosman/" title="BOSMAN - Dom Wypoczynkowy">BOSMAN - Dom Wypoczynkowy</a>
							<div class="imgbox">
								<img src="/images/8-0-small.jpg" alt="BOSMAN - Dom Wypoczynkowy" height="60" width="60">
							</div>	
							
							<span class="price">Cena<br>70.00 zl</span>
											
											<a href="http://polltyka.com.pl/hotel-spinaker/" title="Hotel Spinaker">Hotel Spinaker</a>
							<div class="imgbox">
											<img src="/images/8-0-small.jpg" alt="Hotel Spinaker" height="60" width="60">
											</div>	
							
							<span class="price">Cena<br>150.00 zl</span>
						</div>
					</div>
				</div><!-- right menu -->
			</div><!-- main -->
			
			<div class="footer">
		<div class="footermenu">
<?php if ($_smarty_tpl->getVariable('logged')->value==1){?>
<a href="index.php?module=user&name=logout">Wyloguj się</a>
<?php }else{ ?>
<a href="index.php?module=user&name=register_company">Zarejestruj swoją firmę</a> 
<a href="index.php?module=user&name=login">Zaloguj się</a>
<?php }?>
		</div>
		
	</div><!-- footer -->
</center>

	</body>
</html>
