@extends('layouts.default')
@section('title', 'Computers')
@section('description', 'Computers I own or have owned.')
@php
// TODO: AMD whitebox, 745, D531, 1525, server, vaio, qosmio, packard bell
@endphp
@section('content')
    <table class="computers">
        <tr>
            <th>PICTURES</th>
            <th>SPECS &amp; DESCRIPTION</th>
        </tr>
        <tr>
            <td>Random Whitebox</td>
            <td>
                <span class="section-title">Quick Specs</span>
                <ul>
                    <li>486DX2 (50MHz)</li>
                    <li>16MB RAM</li>
                    <li>280MB HDD</li>
                    <li>Windows NT 3.51</li>
                </ul>
                <p class="description">
                    Had been monitoring the ventilation system in a school since the late 1990s,
                    only stopped because the power supply internally exploded. Replaced the PSU with
                    a standard ATX PSU and an ATX to AT adaptor and it sprung back to life.
                    Motherboard is a Gigabyte GA486IM with 4 PCI slots, 4 ISA slots and 2 VLB slots.
                    Has two identical ISA serial/parallel/game-port cards with one acting as the
                    HDD/FDD controller. Also has a Realtek NIC with both RJ45 and BNC. GPU is a
                    Cirrus Logic card and is astoundingly shit.
                </p>
            </td>
        </tr>
        <tr>
            <td>2023 MacBook Pro 14"</td>
            <td>
                <span class="section-title">Quick Specs</span>
                <ul>
                    <li>Apple M3 Pro</li>
                    <li>18GB RAM</li>
                    <li>500GB SSD</li>
                    <li>macOS Sonoma</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>2018 MacBook Pro 13"</td>
            <td>
                <span class="section-title">Quick Specs</span>
                <ul>
                    <li>Intel i5-8259U @ 2.3GHz</li>
                    <li>Intel Iris Plus Graphics 655</li>
                    <li>8GB RAM</li>
                    <li>250GB SSD</li>
                    <li>macOS Sonoma</li>
                </ul>
                <p class="description">
                    Old main computer. Really like the touch bar, absolutely hate the butterfly
                    keyboard.
                </p>
            </td>
        </tr>
        <tr>
            <td>2012 Lenovo ThinkPad T430</td>
            <td>
                <span class="section-title">Quick Specs</span>
                <ul>
                    <li>Intel Core i7</li>
                    <li>16GB RAM</li>
                    <li>Windows 7 Professional / NixOS</li>
                </ul>
                <p class="description">
                    One of my main computers. Has been modified to use a classic keyboard instead of
                    the stock Lenovo keyboard.
                </p>
            </td>
        </tr>
        <tr>
            <td>2005 IBM ThinkPad X41T</td>
            <td>
                <span class="section-title">Quick Specs</span>
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
                <span class="section-title">Quick Specs</span>
                <ul>
                    <li>Intel Pentium II (Deschutes) @ 400MHz</li>
                    <li>ATI 3D Rage Pro (4MB)</li>
                    <li>639MB</li>
                    <li>40GB HDD</li>
                    <li>MS-DOS 6.22 &amp; WFW 3.10</li>
                </ul>
                <p class="description">
                    Cool computer that uses Slot 1 CPUs. After a lot of trial and error I managed to
                    max out the memory. Has a riser that sports 2 PCI and 2 ISA slots (one PCI and
                    ISA share the same slot).
                </p>
            </td>
        </tr>
        <tr>
            <td>2003 IBM ThinkPad T40</td>
            <td>
                <span class="section-title">Quick Specs</span>
                <ul>
                    <li>Intel Pentium M @ 1.3GHz</li>
                    <li>ATI Mobility Radeon 7500 (32MB)</li>
                    <li>1GB RAM</li>
                    <li>30GB HDD</li>
                    <li>Windows 2000 Professional</li>
                </ul>
                <p class="description">
                    Useful laptop thanks to its parallel port. Has the ubiquitous GPU solder issues
                    which I &quot;&quot;&quot;&quot;fixed&quot;&quot;&quot;&quot; by jamming a CF card
                    between the GPU chip and the keyboard.
                </p>
            </td>
        </tr>
        <tr>
            <td>2010 HP Compaq Elite 8100</td>
            <td>
                <span class="section-title">Quick Specs</span>
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
                <span class="section-title">Quick Specs</span>
                <ul>
                    <li>Intel Core i5-4278U @ 2.6GHz</li>
                    <li>Intel Iris Graphics</li>
                    <li>8GB RAM</li>
                    <li>1TB HDD</li>
                    <li>VMware ESXi 6.7.0u3</li>
                </ul>
                <p class="description">
                    Was used as my VM host for a few years. Has now been superseded by an
                    actual 1U rack-mount server.
                </p>
            </td>
        </tr>
        <tr>
            <td>1996 Fujitsu Milan</td>
            <td>
                <span class="section-title">Quick Specs</span>
                <ul>
                    <li>Intel Pentium</li>
                    <li>32MB RAM</li>
                    <li>1215MB HDD</li>
                    <li>Windows 98 SE</li>
                </ul>
                <p class="description">
                    Was originally a family members' laptop. Unfortunately the HDD side of the
                    HDD/FDD cable ripped while I was removing the drive to clean the computer.
                    Still scouring eBay for a replacement cable (or more likely, an entire
                    parts machine).
                </p>
            </td>
        </tr>
        <tr>
            <td>1999 Compaq Armada M300</td>
            <td>
                <span class="section-title">Quick Specs</span>
                <ul>
                    <li>Intel Pentium III</li>
                </ul>
                <p class="description">
                    Nice little laptop. Mysteriously dead.
                </p>
            </td>
        </tr>
    </table>
@stop
