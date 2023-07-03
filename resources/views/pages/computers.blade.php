@extends('layouts.default')
@section('title', 'computers')
@section('description', 'Computers I own or have owned.')
@section('content')
        <table class="computers" border="0">
	    	<tr>
	    		<!-- Custom Build -->
	    		<td class="computer">
	    			<h1>Custom Build</h1>
	    			<h2>Specifications</h2>
	    			<table class="skami">
	    				<tr>
	    					<td><b>OS</b></td>
	    					<td>NixOS 22.11 / Windows 10 Pro</td>
	    				</tr>
	    				<tr>
	    					<td><b>Monitor</b></td>
	    					<td>Dell P2018H (1600x900)</td>
	    				</tr>
	    				<tr>
	    					<td><b>CPU</b></td>
	    					<td>Intel i7-6700K (8) @ 4.0GHz</td>
	    				</tr>
	    				<tr>
	    					<td><b>GPU</b></td>
	    					<td>NVidia GTX 1060 (3GB)</td>
	    				</tr>
	    				<tr>
	    					<td><b>Memory</b></td>
	    					<td>64GB</td>
	    				</tr>
	    				<tr>
	    					<td><b>HDD0</b></td>
	    					<td>SanDisk SSD Plus (120GB, Windows 10)</td>
	    				</tr>
	    				<tr>
	    					<td><b>HDD1</b></td>
	    					<td>Crucial CT500MX500SSD1 (500GB, NixOS)</td>
	    				</tr>
	    				<tr>
	    					<td><b>HDD2</b></td>
	    					<td>WDC WD20EZEAZ-00GGJB0 (2TB, Data)</td>
	    				</tr>
	    			</table>
	    		</td>
	    		<!-- Macbook Pro (2018) -->
	    		<td class="computer">
	    			<h1>Macbook Pro (2018)</h1>
	    			<h2>Specifications</h2>
	    			<table class="skami">
	    				<tr>
	    					<td><b>OS</b></td>
	    					<td>macOS 12.5.1</td>
	    				</tr>
	    				<tr>
	    					<td><b>LCD Resolution</b></td>
	    					<td>2560x1600 (Retina)</td>
	    				</tr>
	    				<tr>
	    					<td><b>CPU</b></td>
	    					<td>Intel i5-8259U (8 cores) @ 2.3GHz</td>
	    				</tr>
	    				<tr>
	    					<td><b>GPU</b></td>
	    					<td>Intel Iris Plus Graphics 655</td>
	    				</tr>
	    				<tr>
	    					<td><b>Memory</b></td>
	    					<td>8GB</td>
	    				</tr>
	    				<tr>
	    					<td><b>HDD</b></td>
	    					<td>Apple SSD AP0256M (250GB)</td>
	    				</tr>
	    			</table>
	    		</td>
	    	</tr>
	    	<tr>
	    		<!-- Lenovo ThinkPad T430 -->
	    		<td class="computer">
	    			<h1>Lenovo ThinkPad T430 (2012)</h1>
	    			<h2>Specifications</h2>
	    			<table class="skami">
	    				<tr>
	    					<td><b>OS</b></td>
	    					<td>Arch Linux x86_64 / Windows 7 Pro</td>
	    				</tr>
	    				<tr>
	    					<td><b>LCD Resolution</b></td>
	    					<td>1600x900</td>
	    				</tr>
	    				<tr>
	    					<td><b>CPU</b></td>
	    					<td>Intel i7-3520M (4 cores) @ 3.6GHz</td>
	    				</tr>
	    				<tr>
	    					<td><b>GPU</b></td>
	    					<td>Intel 3rd Gen Core processor Graphics Controller</td>
	    				</tr>
	    				<tr>
	    					<td><b>Memory</b></td>
	    					<td>16GB</td>
	    				</tr>
	    				<tr>
	    					<td><b>HDD0</b></td>
	    					<td>Crucial CT500MX500SSD1 (500GB, Linux)</td>
	    				</tr>
	    				<tr>
	    					<td><b>HDD1</b></td>
	    					<td>Crucial CT250MX500SSD1 (250GB, Windows)</td>
	    				</tr>
	    			</table>
	    		</td>
	    		<!-- IBM ThinkPad X41 (2005) -->
	    		<td class="computer">
	    			<h1>IBM ThinkPad X41 (2005)</h1>
	    			<h2>Specifications</h2>
	    			<table class="skami">
	    				<tr>
	    					<td><b>OS</b></td>
	    					<td>Windows XP Tablet PC Edition (2005, SP3)</td>
	    				</tr>
	    				<tr>
	    					<td><b>LCD Resolution</b></td>
	    					<td>1024x768 (TFT)</td>
	    				</tr>
	    				<tr>
	    					<td><b>CPU</b></td>
	    					<td>Intel Pentium M (single core) @ 1.6GHz</td>
	    				</tr>
	    				<tr>
	    					<td><b>GPU</b></td>
	    					<td>Mobile Intel 915GM/GMS 910GML Express Chipset Family (128MB)</td>
	    				</tr>
	    				<tr>
	    					<td><b>Memory</b></td>
	    					<td>1.5GB (DDR SDRAM)</td>
	    				</tr>
	    				<tr>
	    					<td><b>HDD</b></td>
	    					<td>Hitachi HTC426040G9AT00 (40GB)</td>
	    				</tr>
	    			</table>
	    		</td>
	    	</tr>
	    	<tr>
	    		<!-- Dell OptiPlex GX1 (400L+, 1999) -->
	    		<td class="computer">
	    			<h1>Dell OptiPlex GX1 (400L+, 1999)</h1>
	    			<h2>Specifications</h2>
	    			<table class="skami">
	    				<tr>
	    					<td><b>OS</b></td>
	    					<td>Windows NT 4.0 (SP6)</td>
	    				</tr>
	    				<tr>
	    					<td><b>CPU</b></td>
	    					<td>Intel Pentium II (Deschutes) @ 400 MHz</td>
	    				</tr>
	    				<tr>
	    					<td><b>GPU</b></td>
	    					<td>ATI 3D Rage Pro (4MB)</td>
	    				</tr>
	    				<tr>
	    					<td><b>Memory</b></td>
	    					<td>639MB (SDR SDRAM)</td>
	    				</tr>
	    				<tr>
	    					<td><b>HDD</b></td>
	    					<td>Maxtor 2F020J0 (20GB)</td>
	    				</tr>
	    			</table>
	    		</td>
	    		<!-- Dell Inspiron 1525 (2008) -->
	    		<td class="computer">
	    			<h1>Dell Inspiron 1525 (2008)</h1>
	    			<h2>Specifications</h2>
	    			<p>TBD</p>
	    		</td>
	    	</tr>
	    	<tr>
	    		<!-- Dell OptiPlex 745 (USFF, 2007, x3) -->
	    		<td class="computer">
	    			<h1>Dell OptiPlex 745 (USFF, 2007, x3)</h1>
	    			<h2>Specifications</h2>
	    			<table class="skami">
	    				<tr>
	    					<td><b>OS</b></td>
	    					<td>Various</td>
	    				</tr>
	    				<tr>
	    					<td><b>CPU</b></td>
	    					<td>Intel Pentium Dual Core</td>
	    				</tr>
	    				<tr>
	    					<td><b>Memory</b></td>
	    					<td>4GB</td>
	    				</tr>
	    			</table>
	    		</td>
	    		<!-- IBM ThinkPad T40 (2003) -->
	    		<td class="computer">
	    			<h1>IBM ThinkPad T40 (2003)</h1>
	    			<h2>Specifications</h2>
	    			<table class="skami">
	    				<tr>
	    					<td><b>OS</b></td>
	    					<td>Windows XP Pro / Windows 2000 Pro (Extended)</td>
	    				</tr>
	    				<tr>
	    					<td><b>LCD Resolution</b></td>
	    					<td>1024x768</td>
	    				</tr>
	    				<tr>
	    					<td><b>CPU</b></td>
	    					<td>Intel Pentium M (single core) @ 1.3GHz</td>
	    				</tr>
	    				<tr>
	    					<td><b>GPU</b></td>
	    					<td>ATI Mobility Radeon 7500 (32MB)</td>
	    				</tr>
	    				<tr>
	    					<td><b>Memory</b></td>
	    					<td>1GB (DDR SDRAM)</td>
	    				</tr>
	    				<tr>
	    					<td><b>HDD</b></td>
	    					<td>Fujitsu MHS2030AT (30GB)</td>
	    				</tr>
	    			</table>
	    		</td>
	    	</tr>
	    	<tr>
	    		<!-- Random Whitebox (???) -->
	    		<td class="computer">
	    			<h1>Random Whitebox (???)</h1>
	    			<h2>Specifications</h2>
	    			<table class="skami">
	    				<tr>
	    					<td><b>OS</b></td>
	    					<td>Windows XP Pro (SP3)</td>
	    				</tr>
	    				<tr>
	    					<td><b>CPU</b></td>
	    					<td>AMD Athon-PECM (Thunderbird, 4 cores, 1.2GHz)</td>
	    				</tr>
	    				<tr>
	    					<td><b>GPU</b></td>
	    					<td>Hercules 3D Propher 9000 PCI (ATI Radeon 9000, 64MB)</td>
	    				</tr>
	    				<tr>
	    					<td><b>Memory</b></td>
	    					<td>500MB</td>
	    				</tr>
	    				<tr>
	    					<td><b>HDD</b></td>
	    					<td>Seagate ST3160215ACE (150GB)</td>
	    				</tr>
	    			</table>
	    		</td>
	    		<!-- Mac mini (2014) -->
	    		<td class="computer">
	    			<h1>Mac mini (2014)</h1>
	    			<h2>Specifications</h2>
	    			<table class="skami">
	    				<tr>
	    					<td><b>OS</b></td>
	    					<td>VMware ESXi 6.7.0u3</td>
	    				</tr>
	    				<tr>
	    					<td><b>CPU</b></td>
	    					<td>Intel i5-4278U (4 cores) @ 2.6GHz</td>
	    				</tr>
	    				<tr>
	    					<td><b>GPU</b></td>
	    					<td>Intel Iris Graphics</td>
	    				</tr>
	    				<tr>
	    					<td><b>Memory</b></td>
	    					<td>8GB</td>
	    				</tr>
	    				<tr>
	    					<td><b>HDD</b></td>
	    					<td>Apple HDD HTS541 (1TB)</td>
	    				</tr>
	    			</table>
	    		</td>
	    	</tr>
	    	<tr>
	    		<!-- Fujitsu Milan (1996) -->
	    		<td class="computer">
	    			<h1>Fujitsu Milan (1996)</h1>
	    			<h2>Specifications</h2>
	    			<table class="skami">
	    				<tr>
	    					<td><b>OS</b></td>
	    					<td>Windows 98 SE</td>
	    				</tr>
	    				<tr>
	    					<td><b>CPU</b></td>
	    					<td>Intel Pentium</td>
	    				</tr>
	    				<tr>
	    					<td><b>Memory</b></td>
	    					<td>32MB</td>
	    				</tr>
	    				<tr>
	    					<td><b>HDD</b></td>
	    					<td>IBM DPRA-21215 (1215MB)</td>
	    				</tr>
	    			</table>
	    		</td>

	    		<!-- Compaq Armada M300 (2000) -->
	    		<td class="computer">
	    			<h1>Compaq Armada M300 (2000)</h1>
	    			<h2>Specifications</h2>
	    			<p>TBD</p>
	    		</td>
	    	</tr>
        </table>
@stop
