@extends('layouts.default')
@section('title', 'Computers')
@section('description', 'Computers I own or have owned.')
@section('content')
    <table class="computers">
        <tr>
            <th>PICTURES</th>
            <th>SPECS &amp; DESCRIPTION</th>
        </tr>
        <tr>
            <td>2023 MacBook Pro 14"</td>
            <td>
                <section-title>Quick Specs</section-title>
                <ul>
                    <li>Apple M3 Pro</li>
                    <li>18GB RAM</li>
                    <li>500GB SSD</li>
                    <li>macOS Sonoma</li>
                </ul>
                <p class="description">WHAT</p>
            </td>
        </tr>
        <tr>
            <td>2018 MacBook Pro 13"</td>
            <td>
                <section-title>Quick Specs</section-title>
                <ul>
                    <li>Intel i5-8259U @ 2.3GHz</li>
                    <li>Intel Iris Plus Graphics 655</li>
                    <li>8GB RAM</li>
                    <li>250GB SSD</li>
                    <li>macOS Sonoma</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>2012 Lenovo ThinkPad T430</td>
            <td>
                <section-title>Quick Specs</section-title>
                <ul>
                    <li>Intel Core i7</li>
                    <li>16GB RAM</li>
                    <li>Windows 7 Professional</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>2005 IBM ThinkPad X41T</td>
            <td>
                <section-title>Quick Specs</section-title>
                <ul>
                    <li>Intel Pentium M @ 1.6GHz</li>
                    <li>Mobile Intel Express Chipset Family (128MB)</li>
                    <li>1.5GB RAM</li>
                    <li>40GB HDD</li>
                    <li>Windows XP Tablet PC Edition</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>1999 Dell OptiPlex GX1</td>
            <td>
                <section-title>Quick Specs</section-title>
                <ul>
                    <li>Intel Pentium II (Deschutes) @ 400MHz</li>
                    <li>ATI 3D Rage Pro (4MB)</li>
                    <li>639MB</li>
                    <li>40GB HDD</li>
                    <li>MS-DOS 6.22 &amp; WFW 3.10</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>2003 IBM ThinkPad T40</td>
            <td>
                <section-title>Quick Specs</section-title>
                <ul>
                    <li>Intel Pentium M @ 1.3GHz</li>
                    <li>ATI Mobility Radeon 7500 (32MB)</li>
                    <li>1GB RAM</li>
                    <li>30GB HDD</li>
                    <li>Windows 2000 Professional</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>2010 HP Compaq Elite 8100</td>
            <td>
                <section-title>Quick Specs</section-title>
                <ul>
                    <li>Intel Core i7</li>
                    <li>16GB RAM</li>
                    <li>some SSD and an HDD</li>
                    <li>Windows Vista Ultimate (64-bit)</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>2014 Mac mini</td>
            <td>
                <section-title>Quick Specs</section-title>
                <ul>
                    <li>Intel Core i5-4278U @ 2.6GHz</li>
                    <li>Intel Iris Graphics</li>
                    <li>8GB RAM</li>
                    <li>1TB HDD</li>
                    <li>VMware ESXi 6.7.0u3</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>1996 Fujitsu Milan</td>
            <td>
                <section-title>Quick Specs</section-title>
                <ul>
                    <li>Intel Pentium</li>
                    <li>32MB RAM</li>
                    <li>1215MB HDD</li>
                    <li>Windows 98 SE</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>1999 Compaq Armada M300</td>
            <td>
                <section-title>Quick Specs</section-title>
                <ul>
                    <li>Intel Pentium III</li>
                </ul>
            </td>
        </tr>
    </table>
    <!--<table class="computer" role="presentation">
        <tr>
            <td colspan="2"><h2>Custom Build</h2><hr></td>
        </tr>
        <tr>
            <td>
                <table class="computer-specs">
                    <tr>
                        <td class="spec-title">OS:</td>
                        <td class="spec">NixOS 22.11 / Windows 10 Pro</td>
                    </tr>
                    <tr>
                        <td class="spec-title">CPU:</td>
                        <td class="spec">Intel i7-6700K (8-core) @ 4.0GHz</td>
                    </tr>
                    <tr>
                        <td class="spec-title">GPU:</td>
                        <td class="spec">NVidia GTX 1060 (3GB)</td>
                    </tr>
                    <tr>
                        <td class="spec-title">Memory:</td>
                        <td class="spec">64GB</td>
                    </tr>
                    <tr>
                        <td class="spec-title">DISK0:</td>
                        <td class="spec">SanDisk SSD Plus (120GB, Win10)</td>
                    </tr>
                    <tr>
                        <td class="spec-title">DISK1:</td>
                        <td class="spec">Crucial CT500MX500SSD1 (500GB, NixOS)</td>
                    </tr>
                    <tr>
                        <td class="spec-title">DISK2:</td>
                        <td class="spec">WDC WD20EZEAZ-00GGJB0 (2TB, Data)</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <table class="computer" role="presentation">
        <tr>
            <td colspan="2"><h2>MacBook Pro (2018)</h2><hr></td>
        </tr>
        <tr>
            <td>
                <table class="computer-specs">
                    <tr>
                        <td class="spec-title">OS:</td>
                        <td class="spec">macOS 12.5.1</td>
                    </tr>
                    <tr>
                        <td class="spec-title">Display:</td>
                        <td class="spec">2560x1600 (Retina)</td>
                    </tr>
                    <tr>
                        <td class="spec-title">CPU:</td>
                        <td class="spec">Intel i5-8259U (8-core) @ 2.3GHz</td>
                    </tr>
                    <tr>
                        <td class="spec-title">GPU:</td>
                        <td class="spec">Intel Iris Plus Graphics 655</td>
                    </tr>
                    <tr>
                        <td class="spec-title">Memory:</td>
                        <td class="spec">8GB</td>
                    </tr>
                    <tr>
                        <td class="spec-title">DISK:</td>
                        <td class="spec">Apple SSD AP0256M (250GB)</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <table class="computer" role="presentation">
        <tr>
            <td colspan="2"><h2>Lenovo ThinkPad T430 (2012)</h2><hr></td>
        </tr>
        <tr>
            <td>
                <table class="computer-specs">
                    <tr>
                        <td class="spec-title">OS:</td>
                        <td class="spec">NixOS 22.11 / Windows 7 Ultimate</td>
                    </tr>
                    <tr>
                        <td class="spec-title">CPU:</td>
                        <td class="spec">Intel i7-3520M (4-core) @ 3.6GHz</td>
                    </tr>
                    <tr>
                        <td class="spec-title">GPU:</td>
                        <td class="spec">Intel 3rd Gen Core processor Graphics Controllertd>
                    </tr>
                    <tr>
                        <td class="spec-title">Memory:</td>
                        <td class="spec">16GB</td>
                    </tr>
                    <tr>
                        <td class="spec-title">DISK0:</td>
                        <td class="spec">Crucial CT500MX500SSD1 (500GB, NixOS)</td>
                    </tr>
                    <tr>
                        <td class="spec-title">DISK1:</td>
                        <td class="spec">Crucial CT250MX500SSD1 (250GB, Win7)</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <table class="computer" role="presentation">
        <tr>
            <td colspan="2"><h2>IBM ThinkPad X41 (2005)</h2><hr></td>
        </tr>
        <tr>
            <td>
                <table class="computer-specs">
                    <tr>
                        <td class="spec-title">OS:</td>
                        <td class="spec">Windows XP Tablet PC Edition (2005, SP3)</td>
                    </tr>
                    <tr>
                        <td class="spec-title">CPU:</td>
                        <td class="spec">Intel Pentium M (single-core) @ 1.6GHz</td>
                    </tr>
                    <tr>
                        <td class="spec-title">GPU:</td>
                        <td class="spec">Mobile Intel 915GM/GMS 910GML Express Chipset Family (128MB)</td>
                    </tr>
                    <tr>
                        <td class="spec-title">Memory:</td>
                        <td class="spec">1.5GB</td>
                    </tr>
                    <tr>
                        <td class="spec-title">DISK:</td>
                        <td class="spec">Hitachi HTC426040G9AT00 (40GB)</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <table class="computer" role="presentation">
        <tr>
            <td colspan="2"><h2>Dell OptiPlex GX1 (400L+, 1999)</h2><hr></td>
        </tr>
        <tr>
            <td>
                <table class="computer-specs">
                    <tr>
                        <td class="spec-title">OS:</td>
                        <td class="spec">Windows 3.10 for Workgroups (DOS 6.22)</td>
                    </tr>
                    <tr>
                        <td class="spec-title">CPU:</td>
                        <td class="spec">Intel Pentium II (Deschutes) @ 400MHz</td>
                    </tr>
                    <tr>
                        <td class="spec-title">GPU:</td>
                        <td class="spec">ATI 3D Rage Pro (4MB)</td>
                    </tr>
                    <tr>
                        <td class="spec-title">Memory:</td>
                        <td class="spec">639MB</td>
                    </tr>
                    <tr>
                        <td class="spec-title">DISK:</td>
                        <td class="spec">Unknown</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <table class="computer" role="presentation">
        <tr>
            <td colspan="2"><h2>IBM ThinkPad T40 (2003)</h2><hr></td>
        </tr>
        <tr>
            <td>
                <table class="computer-specs">
                    <tr>
                        <td class="spec-title">OS:</td>
                        <td class="spec">Windows XP Pro</td>
                    </tr>
                    <tr>
                        <td class="spec-title">CPU:</td>
                        <td class="spec">Intel Pentium M (single-core) @ 1.3GHz</td>
                    </tr>
                    <tr>
                        <td class="spec-title">GPU:</td>
                        <td class="spec">ATI Mobility Radeon 7500 (32MB)</td>
                    </tr>
                    <tr>
                        <td class="spec-title">Memory:</td>
                        <td class="spec">1GB</td>
                    </tr>
                    <tr>
                        <td class="spec-title">DISK:</td>
                        <td class="spec">Fujitsu MHS2030AT (30GB)</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <table class="computer" role="presentation">
        <tr>
            <td colspan="2"><h2>HP Compaq Elite 8100 CMT</h2><hr></td>
        </tr>
        <tr>
            <td>
                <table class="computer-specs">
                    <tr>
                        <td class="spec-title">OS:</td>
                        <td class="spec">Windows Vista 64-bit</td>
                    </tr>
                    <tr>
                        <td class="spec-title">CPU:</td>
                        <td class="spec">Intel Core i7</td>
                    </tr>
                    <tr>
                        <td class="spec-title">GPU:</td>
                        <td class="spec"></td>
                    </tr>
                    <tr>
                        <td class="spec-title">Memory:</td>
                        <td class="spec">16GB</td>
                    </tr>
                    <tr>
                        <td class="spec-title">DISK0:</td>
                        <td class="spec">SanDisk SSD Plus (120GB, Win10)</td>
                    </tr>
                    <tr>
                        <td class="spec-title">DISK1:</td>
                        <td class="spec">Crucial CT500MX500SSD1 (500GB, NixOS)</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <table class="computer" role="presentation">
        <tr>
            <td colspan="2"><h2>Mac mini (2014)</h2><hr></td>
        </tr>
        <tr>
            <td>
                <table class="computer-specs">
                    <tr>
                        <td class="spec-title">OS:</td>
                        <td class="spec">VMware ESXi 6.7.0u3</td>
                    </tr>
                    <tr>
                        <td class="spec-title">CPU:</td>
                        <td class="spec">Intel i5-4278U (4-core) @ 2.6GHz</td>
                    </tr>
                    <tr>
                        <td class="spec-title">GPU:</td>
                        <td class="spec">Intel Iris Graphics</td>
                    </tr>
                    <tr>
                        <td class="spec-title">Memory:</td>
                        <td class="spec">8GB</td>
                    </tr>
                    <tr>
                        <td class="spec-title">DISK:</td>
                        <td class="spec">Apple HDD HTS541 (1TB)</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <table class="computer" role="presentation">
        <tr>
            <td colspan="2"><h2>Fujitsu Milan (1996)</h2><hr></td>
        </tr>
        <tr>
            <td>
                <table class="computer-specs">
                    <tr>
                        <td class="spec-title">OS:</td>
                        <td class="spec">Windows 98 SE</td>
                    </tr>
                    <tr>
                        <td class="spec-title">CPU:</td>
                        <td class="spec">Intel Pentium</td>
                    </tr>
                    <tr>
                        <td class="spec-title">Memory:</td>
                        <td class="spec">32MB</td>
                    </tr>
                    <tr>
                        <td class="spec-title">DISK:</td>
                        <td class="spec">IBM DPRA-21215 (1215MB)</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>-->
    <!--<table class="computer" role="presentation">
        <tr>
            <td colspan="2"><h2>Compaq Armada M300</h2><hr></td>
        </tr>
        <tr>
            <td>
                <table class="computer-specs">
                    <tr>
                        <td class="spec">TBD</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>-->
@stop
