<?php
$topdir = "../../../..";
# Note that we must use the PHP "$$" indirection to assign to the
# "title" variable, because if we list "$ title" (without the space)
# in this file, Doxygen will replace it with a string title.
$ver = basename(getcwd());
$thwarting_doxygen_preprocessor = "title";
$$thwarting_doxygen_preprocessor = "Portable Hardware Locality (hwloc) Documentation: $ver";
$header_include_file = "$topdir/projects/hwloc/doc/$ver/www.open-mpi.org-css.inc";
include_once("$topdir/projects/hwloc/nav.inc");
include_once("$topdir/includes/header.inc");
include_once("$topdir/includes/code.inc");
?>
<!-- Generated by Doxygen 1.8.9.1 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li class="current"><a href="pages.php"><span>Related&#160;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="annotated.php"><span>Data&#160;Structures</span></a></li>
    </ul>
  </div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">Miscellaneous objects </div>  </div>
</div><!--header-->
<div class="contents">
<div class="textblock"><p>hwloc topologies may be annotated with Misc objects (of type <code><a class="el" href="a00076.php#ggacd37bb612667dc437d66bfb175a8dc55a19f8a6953fa91efc76bcbcdf2d22de4d" title="Miscellaneous objects. Objects without particular meaning, that can e.g. be added by the application ...">HWLOC_OBJ_MISC</a></code>) either automatically or by the user. This is an flexible way to annotate topologies with large sets of information since Misc objects may be inserted anywhere in the topology (to annotate specific objects or parts of the topology), even below other Misc objects, and each of them may contain multiple attributes (ee also <a class="el" href="a00030.php#faq_annotate">How do I annotate the topology with private notes?</a>).</p>
<p>These Misc objects may have a <code>Type</code> info attribute to replace <code>Misc</code> with something else in the lstopo output.</p>
<h1><a class="anchor" id="miscobjs_auto"></a>
Misc objects added by hwloc</h1>
<p>hwloc only uses Misc objects when other object types are not sufficient. This currently includes: </p><ul>
<li>
Memory modules (DIMMs), on Linux when privileged and when <code>dmi-sysfs</code> is supported by the kernel, and when I/O discovery is enabled. These objects have a <code>Type</code> info attribute of value <code>MemoryModule</code>. They are currently always attached to the root object. Their attributes describe the DIMM vendor, model, etc. <code>lstopo -v</code> displays them as: <div class="fragment"><div class="line">Misc(MemoryModule) (P#1 Type=MemoryModule DeviceLocation=<span class="stringliteral">&quot;Bottom-Slot 2(right)&quot;</span> BankLocation=<span class="stringliteral">&quot;BANK 2&quot;</span> Vendor=Elpida SerialNumber=21733667 AssetTag=9876543210 PartNumber=<span class="stringliteral">&quot;EBJ81UG8EFU0-GN-F &quot;</span>)</div>
</div><!-- fragment -->  </li>
<li>
Displaying process binding in <code>lstopo --top</code>. These objects have a <code>Type</code> info attribute of value <code>Process</code> and a name attribute made of their PID and program name. They are attached below the object they are bound to. The textual <code>lstopo</code> displays them as: <div class="fragment"><div class="line">PU L#0 (P#0)</div>
<div class="line">  Misc(Process) 4445 myprogram</div>
</div><!-- fragment -->  </li>
</ul>
<h1><a class="anchor" id="miscobjs_annotate"></a>
Annotating topologies with Misc objects</h1>
<p>The user may annotate hwloc topologies with its own Misc objects. A Misc object may be inserted anywhere in the topology by specifying its CPU set (using <code><a class="el" href="a00084.php#ga77c753751f3b90fac14117523fe604df" title="Add a MISC object to the topology. ">hwloc_topology_insert_misc_object_by_cpuset()</a></code>). Or it may be inserted as a leaf of the topology by specifying its parent (with <code><a class="el" href="a00084.php#ga1472cdf93327dfff4b5b2aedfde29cf3" title="Add a MISC object as a leaf of the topology. ">hwloc_topology_insert_misc_object_by_parent()</a></code>). </p>
</div></div><!-- contents -->
<?php
include_once("$topdir/includes/footer.inc");
