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
      <li><a href="pages.php"><span>Related&#160;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="annotated.php"><span>Data&#160;Structures</span></a></li>
    </ul>
  </div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#nested-classes">Data Structures</a> &#124;
<a href="#typedef-members">Typedefs</a> &#124;
<a href="#enum-members">Enumerations</a> &#124;
<a href="#func-members">Functions</a>  </div>
  <div class="headertitle">
<div class="title">Topology differences</div>  </div>
</div><!--header-->
<div class="contents">
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="nested-classes"></a>
Data Structures</h2></td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">union &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00050.php">hwloc_topology_diff_obj_attr_u</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">struct &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00051.php">hwloc_topology_diff_obj_attr_u::hwloc_topology_diff_obj_attr_uint64_s</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">struct &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00049.php">hwloc_topology_diff_obj_attr_u::hwloc_topology_diff_obj_attr_string_s</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">struct &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00047.php">hwloc_topology_diff_obj_attr_u::hwloc_topology_diff_obj_attr_generic_s</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">union &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00053.php">hwloc_topology_diff_u</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">struct &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00052.php">hwloc_topology_diff_u::hwloc_topology_diff_too_complex_s</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">struct &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00048.php">hwloc_topology_diff_u::hwloc_topology_diff_obj_attr_s</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">struct &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00046.php">hwloc_topology_diff_u::hwloc_topology_diff_generic_s</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="typedef-members"></a>
Typedefs</h2></td></tr>
<tr class="memitem:ga5f2dd099de2cacdc0d0d4858154b971a"><td class="memItemLeft" align="right" valign="top">typedef enum <a class="el" href="a00099.php#ga86f044210b0a9e9fa83acbdbbf7e05fd">hwloc_topology_diff_obj_attr_type_e</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00099.php#ga5f2dd099de2cacdc0d0d4858154b971a">hwloc_topology_diff_obj_attr_type_t</a></td></tr>
<tr class="separator:ga5f2dd099de2cacdc0d0d4858154b971a"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ga4b86adb00c8b2d09ebc4ef8f3bfd92b2"><td class="memItemLeft" align="right" valign="top">typedef enum <a class="el" href="a00099.php#ga38b28b7423b85a3321e6d0062d5f83d0">hwloc_topology_diff_type_e</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00099.php#ga4b86adb00c8b2d09ebc4ef8f3bfd92b2">hwloc_topology_diff_type_t</a></td></tr>
<tr class="separator:ga4b86adb00c8b2d09ebc4ef8f3bfd92b2"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ga2cf1b17332fe5d95f2198f6340cfd288"><td class="memItemLeft" align="right" valign="top">typedef union <a class="el" href="a00053.php">hwloc_topology_diff_u</a> *&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00099.php#ga2cf1b17332fe5d95f2198f6340cfd288">hwloc_topology_diff_t</a></td></tr>
<tr class="separator:ga2cf1b17332fe5d95f2198f6340cfd288"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="enum-members"></a>
Enumerations</h2></td></tr>
<tr class="memitem:ga86f044210b0a9e9fa83acbdbbf7e05fd"><td class="memItemLeft" align="right" valign="top">enum &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00099.php#ga86f044210b0a9e9fa83acbdbbf7e05fd">hwloc_topology_diff_obj_attr_type_e</a> { <a class="el" href="a00099.php#gga86f044210b0a9e9fa83acbdbbf7e05fdabc7f0c7ed0b6864e902f4b70f2c7bc94">HWLOC_TOPOLOGY_DIFF_OBJ_ATTR_SIZE</a>, 
<a class="el" href="a00099.php#gga86f044210b0a9e9fa83acbdbbf7e05fda94a8f37c51d62d15ac6192665dd49310">HWLOC_TOPOLOGY_DIFF_OBJ_ATTR_NAME</a>, 
<a class="el" href="a00099.php#gga86f044210b0a9e9fa83acbdbbf7e05fda63430bf932434bc456282f636d39c2c2">HWLOC_TOPOLOGY_DIFF_OBJ_ATTR_INFO</a>
 }</td></tr>
<tr class="separator:ga86f044210b0a9e9fa83acbdbbf7e05fd"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ga38b28b7423b85a3321e6d0062d5f83d0"><td class="memItemLeft" align="right" valign="top">enum &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00099.php#ga38b28b7423b85a3321e6d0062d5f83d0">hwloc_topology_diff_type_e</a> { <a class="el" href="a00099.php#gga38b28b7423b85a3321e6d0062d5f83d0accbcaee230f79989debb284c8626f0c0">HWLOC_TOPOLOGY_DIFF_OBJ_ATTR</a>, 
<a class="el" href="a00099.php#gga38b28b7423b85a3321e6d0062d5f83d0a3dc01fdeff355efe3fb2516bb454a147">HWLOC_TOPOLOGY_DIFF_TOO_COMPLEX</a>
 }</td></tr>
<tr class="separator:ga38b28b7423b85a3321e6d0062d5f83d0"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:gada4c1273ce020afaf02b649496f7edf5"><td class="memItemLeft" align="right" valign="top">enum &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00099.php#gada4c1273ce020afaf02b649496f7edf5">hwloc_topology_diff_apply_flags_e</a> { <a class="el" href="a00099.php#ggada4c1273ce020afaf02b649496f7edf5a821a160512d67ea0dd05dab873d2fc54">HWLOC_TOPOLOGY_DIFF_APPLY_REVERSE</a>
 }</td></tr>
<tr class="separator:gada4c1273ce020afaf02b649496f7edf5"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="func-members"></a>
Functions</h2></td></tr>
<tr class="memitem:ga8a1754f69fbb31364ea3ea2c39827c9f"><td class="memItemLeft" align="right" valign="top">int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00099.php#ga8a1754f69fbb31364ea3ea2c39827c9f">hwloc_topology_diff_build</a> (<a class="el" href="a00078.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="a00078.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> newtopology, unsigned long flags, <a class="el" href="a00099.php#ga2cf1b17332fe5d95f2198f6340cfd288">hwloc_topology_diff_t</a> *diff)</td></tr>
<tr class="separator:ga8a1754f69fbb31364ea3ea2c39827c9f"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:gae7b350d7e7478a4c6047b08aa6544f40"><td class="memItemLeft" align="right" valign="top">int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00099.php#gae7b350d7e7478a4c6047b08aa6544f40">hwloc_topology_diff_apply</a> (<a class="el" href="a00078.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="a00099.php#ga2cf1b17332fe5d95f2198f6340cfd288">hwloc_topology_diff_t</a> diff, unsigned long flags)</td></tr>
<tr class="separator:gae7b350d7e7478a4c6047b08aa6544f40"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:gab531db0e4ca3e590d48358c90f59c197"><td class="memItemLeft" align="right" valign="top">int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00099.php#gab531db0e4ca3e590d48358c90f59c197">hwloc_topology_diff_destroy</a> (<a class="el" href="a00078.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="a00099.php#ga2cf1b17332fe5d95f2198f6340cfd288">hwloc_topology_diff_t</a> diff)</td></tr>
<tr class="separator:gab531db0e4ca3e590d48358c90f59c197"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:gae82a885a377aff78936c5f175b5980f8"><td class="memItemLeft" align="right" valign="top">int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00099.php#gae82a885a377aff78936c5f175b5980f8">hwloc_topology_diff_load_xml</a> (<a class="el" href="a00078.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, const char *xmlpath, <a class="el" href="a00099.php#ga2cf1b17332fe5d95f2198f6340cfd288">hwloc_topology_diff_t</a> *diff, char **refname)</td></tr>
<tr class="separator:gae82a885a377aff78936c5f175b5980f8"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:gacceb7e97b5689d0405db618bb5541012"><td class="memItemLeft" align="right" valign="top">int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00099.php#gacceb7e97b5689d0405db618bb5541012">hwloc_topology_diff_export_xml</a> (<a class="el" href="a00078.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="a00099.php#ga2cf1b17332fe5d95f2198f6340cfd288">hwloc_topology_diff_t</a> diff, const char *refname, const char *xmlpath)</td></tr>
<tr class="separator:gacceb7e97b5689d0405db618bb5541012"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ga09afc24f1c9860465ec352c4ac518dd4"><td class="memItemLeft" align="right" valign="top">int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00099.php#ga09afc24f1c9860465ec352c4ac518dd4">hwloc_topology_diff_load_xmlbuffer</a> (<a class="el" href="a00078.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, const char *xmlbuffer, int buflen, <a class="el" href="a00099.php#ga2cf1b17332fe5d95f2198f6340cfd288">hwloc_topology_diff_t</a> *diff, char **refname)</td></tr>
<tr class="separator:ga09afc24f1c9860465ec352c4ac518dd4"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ga88e72855746c81e2341580fa8d619a51"><td class="memItemLeft" align="right" valign="top">int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00099.php#ga88e72855746c81e2341580fa8d619a51">hwloc_topology_diff_export_xmlbuffer</a> (<a class="el" href="a00078.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="a00099.php#ga2cf1b17332fe5d95f2198f6340cfd288">hwloc_topology_diff_t</a> diff, const char *refname, char **xmlbuffer, int *buflen)</td></tr>
<tr class="separator:ga88e72855746c81e2341580fa8d619a51"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<p>Applications that manipulate many similar topologies, for instance one for each node of a homogeneous cluster, may want to compress topologies to reduce the memory footprint.</p>
<p>This file offers a way to manipulate the difference between topologies and export/import it to/from XML. Compression may therefore be achieved by storing one topology entirely while the others are only described by their differences with the former. The actual topology can be reconstructed when actually needed by applying the precomputed difference to the reference topology.</p>
<p>This interface targets very similar nodes. Only very simple differences between topologies are actually supported, for instance a change in the memory size, the name of the object, or some info attribute. More complex differences such as adding or removing objects cannot be represented in the difference structures and therefore return errors.</p>
<p>It means that there is no need to apply the difference when looking at the tree organization (how many levels, how many objects per level, what kind of objects, CPU and node sets, etc) and when binding to objects. However the difference must be applied when looking at object attributes such as the name, the memory size or info attributes. </p>
<h2 class="groupheader">Typedef Documentation</h2>
<a class="anchor" id="ga5f2dd099de2cacdc0d0d4858154b971a"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">typedef enum <a class="el" href="a00099.php#ga86f044210b0a9e9fa83acbdbbf7e05fd">hwloc_topology_diff_obj_attr_type_e</a>  <a class="el" href="a00099.php#ga5f2dd099de2cacdc0d0d4858154b971a">hwloc_topology_diff_obj_attr_type_t</a></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Type of one object attribute difference. </p>

</div>
</div>
<a class="anchor" id="ga2cf1b17332fe5d95f2198f6340cfd288"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">typedef union <a class="el" href="a00053.php">hwloc_topology_diff_u</a> *  <a class="el" href="a00099.php#ga2cf1b17332fe5d95f2198f6340cfd288">hwloc_topology_diff_t</a></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>One element of a difference list between two topologies. </p>

</div>
</div>
<a class="anchor" id="ga4b86adb00c8b2d09ebc4ef8f3bfd92b2"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">typedef enum <a class="el" href="a00099.php#ga38b28b7423b85a3321e6d0062d5f83d0">hwloc_topology_diff_type_e</a>  <a class="el" href="a00099.php#ga4b86adb00c8b2d09ebc4ef8f3bfd92b2">hwloc_topology_diff_type_t</a></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Type of one element of a difference list. </p>

</div>
</div>
<h2 class="groupheader">Enumeration Type Documentation</h2>
<a class="anchor" id="gada4c1273ce020afaf02b649496f7edf5"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">enum <a class="el" href="a00099.php#gada4c1273ce020afaf02b649496f7edf5">hwloc_topology_diff_apply_flags_e</a></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Flags to be given to <a class="el" href="a00099.php#gae7b350d7e7478a4c6047b08aa6544f40" title="Apply a topology diff to an existing topology. ">hwloc_topology_diff_apply()</a>. </p>
<table class="fieldtable">
<tr><th colspan="2">Enumerator</th></tr><tr><td class="fieldname"><a class="anchor" id="ggada4c1273ce020afaf02b649496f7edf5a821a160512d67ea0dd05dab873d2fc54"></a>HWLOC_TOPOLOGY_DIFF_APPLY_REVERSE&#160;</td><td class="fielddoc">
<p>Apply topology diff in reverse direction. </p>
</td></tr>
</table>

</div>
</div>
<a class="anchor" id="ga86f044210b0a9e9fa83acbdbbf7e05fd"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">enum <a class="el" href="a00099.php#ga86f044210b0a9e9fa83acbdbbf7e05fd">hwloc_topology_diff_obj_attr_type_e</a></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Type of one object attribute difference. </p>
<table class="fieldtable">
<tr><th colspan="2">Enumerator</th></tr><tr><td class="fieldname"><a class="anchor" id="gga86f044210b0a9e9fa83acbdbbf7e05fdabc7f0c7ed0b6864e902f4b70f2c7bc94"></a>HWLOC_TOPOLOGY_DIFF_OBJ_ATTR_SIZE&#160;</td><td class="fielddoc">
<p>The object local memory is modified. The union is a <a class="el" href="a00051.php" title="Integer attribute modification with an optional index. ">hwloc_topology_diff_obj_attr_u::hwloc_topology_diff_obj_attr_uint64_s</a> (and the index field is ignored). </p>
</td></tr>
<tr><td class="fieldname"><a class="anchor" id="gga86f044210b0a9e9fa83acbdbbf7e05fda94a8f37c51d62d15ac6192665dd49310"></a>HWLOC_TOPOLOGY_DIFF_OBJ_ATTR_NAME&#160;</td><td class="fielddoc">
<p>The object name is modified. The union is a <a class="el" href="a00049.php" title="String attribute modification with an optional name. ">hwloc_topology_diff_obj_attr_u::hwloc_topology_diff_obj_attr_string_s</a> (and the name field is ignored). </p>
</td></tr>
<tr><td class="fieldname"><a class="anchor" id="gga86f044210b0a9e9fa83acbdbbf7e05fda63430bf932434bc456282f636d39c2c2"></a>HWLOC_TOPOLOGY_DIFF_OBJ_ATTR_INFO&#160;</td><td class="fielddoc">
<p>the value of an info attribute is modified. The union is a <a class="el" href="a00049.php" title="String attribute modification with an optional name. ">hwloc_topology_diff_obj_attr_u::hwloc_topology_diff_obj_attr_string_s</a>. </p>
</td></tr>
</table>

</div>
</div>
<a class="anchor" id="ga38b28b7423b85a3321e6d0062d5f83d0"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">enum <a class="el" href="a00099.php#ga38b28b7423b85a3321e6d0062d5f83d0">hwloc_topology_diff_type_e</a></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Type of one element of a difference list. </p>
<table class="fieldtable">
<tr><th colspan="2">Enumerator</th></tr><tr><td class="fieldname"><a class="anchor" id="gga38b28b7423b85a3321e6d0062d5f83d0accbcaee230f79989debb284c8626f0c0"></a>HWLOC_TOPOLOGY_DIFF_OBJ_ATTR&#160;</td><td class="fielddoc">
<p>An object attribute was changed. The union is a hwloc_topology_diff_obj_attr_u::hwloc_topology_diff_obj_attr_s. </p>
</td></tr>
<tr><td class="fieldname"><a class="anchor" id="gga38b28b7423b85a3321e6d0062d5f83d0a3dc01fdeff355efe3fb2516bb454a147"></a>HWLOC_TOPOLOGY_DIFF_TOO_COMPLEX&#160;</td><td class="fielddoc">
<p>The difference is too complex, it cannot be represented. The difference below this object has not been checked. <a class="el" href="a00099.php#ga8a1754f69fbb31364ea3ea2c39827c9f" title="Compute the difference between 2 topologies. ">hwloc_topology_diff_build()</a> will return 1. </p>
<p>The union is a hwloc_topology_diff_obj_attr_u::hwloc_topology_diff_too_complex_s. </p>
</td></tr>
</table>

</div>
</div>
<h2 class="groupheader">Function Documentation</h2>
<a class="anchor" id="gae7b350d7e7478a4c6047b08aa6544f40"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">int hwloc_topology_diff_apply </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00078.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00099.php#ga2cf1b17332fe5d95f2198f6340cfd288">hwloc_topology_diff_t</a>&#160;</td>
          <td class="paramname"><em>diff</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">unsigned long&#160;</td>
          <td class="paramname"><em>flags</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Apply a topology diff to an existing topology. </p>
<p><code>flags</code> is an OR'ed set of <a class="el" href="a00099.php#gada4c1273ce020afaf02b649496f7edf5" title="Flags to be given to hwloc_topology_diff_apply(). ">hwloc_topology_diff_apply_flags_e</a>.</p>
<p>The new topology is modified in place. <a class="el" href="a00078.php#ga62a161fc5e6f120344dc69a7bee4e587" title="Duplicate a topology. ">hwloc_topology_dup()</a> may be used to duplicate it before patching.</p>
<p>If the difference cannot be applied entirely, all previous applied elements are unapplied before returning.</p>
<dl class="section return"><dt>Returns</dt><dd>0 on success.</dd>
<dd>
-N if applying the difference failed while trying to apply the N-th part of the difference. For instance -1 is returned if the very first difference element could not be applied. </dd></dl>

</div>
</div>
<a class="anchor" id="ga8a1754f69fbb31364ea3ea2c39827c9f"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">int hwloc_topology_diff_build </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00078.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00078.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>newtopology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">unsigned long&#160;</td>
          <td class="paramname"><em>flags</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00099.php#ga2cf1b17332fe5d95f2198f6340cfd288">hwloc_topology_diff_t</a> *&#160;</td>
          <td class="paramname"><em>diff</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Compute the difference between 2 topologies. </p>
<p>The difference is stored as a list of <a class="el" href="a00099.php#ga2cf1b17332fe5d95f2198f6340cfd288" title="One element of a difference list between two topologies. ">hwloc_topology_diff_t</a> entries starting at <code>diff</code>. It is computed by doing a depth-first traversal of both topology trees simultaneously.</p>
<p>If the difference between 2 objects is too complex to be represented (for instance if some objects have different types, or different numbers of children), a special diff entry of type <a class="el" href="a00099.php#gga38b28b7423b85a3321e6d0062d5f83d0a3dc01fdeff355efe3fb2516bb454a147" title="The difference is too complex, it cannot be represented. The difference below this object has not bee...">HWLOC_TOPOLOGY_DIFF_TOO_COMPLEX</a> is queued. The computation of the diff does not continue below these objects. So each such diff entry means that the difference between two subtrees could not be computed.</p>
<dl class="section return"><dt>Returns</dt><dd>0 if the difference can be represented properly.</dd>
<dd>
0 with <code>diff</code> pointing to NULL if there is no difference between the topologies.</dd>
<dd>
1 if the difference is too complex (see above). Some entries in the list will be of type <a class="el" href="a00099.php#gga38b28b7423b85a3321e6d0062d5f83d0a3dc01fdeff355efe3fb2516bb454a147" title="The difference is too complex, it cannot be represented. The difference below this object has not bee...">HWLOC_TOPOLOGY_DIFF_TOO_COMPLEX</a>.</dd>
<dd>
-1 on any other error.</dd></dl>
<dl class="section note"><dt>Note</dt><dd><code>flags</code> is currently not used. It should be 0.</dd>
<dd>
The output diff has to be freed with <a class="el" href="a00099.php#gab531db0e4ca3e590d48358c90f59c197" title="Destroy a list of topology differences. ">hwloc_topology_diff_destroy()</a>.</dd>
<dd>
The output diff can only be exported to XML or passed to <a class="el" href="a00099.php#gae7b350d7e7478a4c6047b08aa6544f40" title="Apply a topology diff to an existing topology. ">hwloc_topology_diff_apply()</a> if 0 was returned, i.e. if no entry of type <a class="el" href="a00099.php#gga38b28b7423b85a3321e6d0062d5f83d0a3dc01fdeff355efe3fb2516bb454a147" title="The difference is too complex, it cannot be represented. The difference below this object has not bee...">HWLOC_TOPOLOGY_DIFF_TOO_COMPLEX</a> is listed.</dd>
<dd>
The output diff may be modified by removing some entries from the list. The removed entries should be freed by passing them to to <a class="el" href="a00099.php#gab531db0e4ca3e590d48358c90f59c197" title="Destroy a list of topology differences. ">hwloc_topology_diff_destroy()</a> (possible as another list). </dd></dl>

</div>
</div>
<a class="anchor" id="gab531db0e4ca3e590d48358c90f59c197"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">int hwloc_topology_diff_destroy </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00078.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00099.php#ga2cf1b17332fe5d95f2198f6340cfd288">hwloc_topology_diff_t</a>&#160;</td>
          <td class="paramname"><em>diff</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Destroy a list of topology differences. </p>
<dl class="section note"><dt>Note</dt><dd>The <code>topology</code> parameter must be a valid topology but it is not required that it is related to <code>diff</code>. </dd></dl>

</div>
</div>
<a class="anchor" id="gacceb7e97b5689d0405db618bb5541012"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">int hwloc_topology_diff_export_xml </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00078.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00099.php#ga2cf1b17332fe5d95f2198f6340cfd288">hwloc_topology_diff_t</a>&#160;</td>
          <td class="paramname"><em>diff</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const char *&#160;</td>
          <td class="paramname"><em>refname</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const char *&#160;</td>
          <td class="paramname"><em>xmlpath</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Export a list of topology differences to a XML file. </p>
<p>If not <code>NULL</code>, <code>refname</code> defines an identifier string for the reference topology which was used as a base when computing this difference. This identifier is usually the name of the other XML file that contains the reference topology. This attribute is given back when reading the diff from XML.</p>
<dl class="section note"><dt>Note</dt><dd>The <code>topology</code> parameter must be a valid topology but it is not required that it is related to <code>diff</code>. </dd></dl>

</div>
</div>
<a class="anchor" id="ga88e72855746c81e2341580fa8d619a51"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">int hwloc_topology_diff_export_xmlbuffer </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00078.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00099.php#ga2cf1b17332fe5d95f2198f6340cfd288">hwloc_topology_diff_t</a>&#160;</td>
          <td class="paramname"><em>diff</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const char *&#160;</td>
          <td class="paramname"><em>refname</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">char **&#160;</td>
          <td class="paramname"><em>xmlbuffer</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">int *&#160;</td>
          <td class="paramname"><em>buflen</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Export a list of topology differences to a XML buffer. </p>
<p>If not <code>NULL</code>, <code>refname</code> defines an identifier string for the reference topology which was used as a base when computing this difference. This identifier is usually the name of the other XML file that contains the reference topology. This attribute is given back when reading the diff from XML.</p>
<dl class="section note"><dt>Note</dt><dd>The XML buffer should later be freed with <a class="el" href="a00086.php#ga293e4a6489f15fd16ad22a5734561cf1" title="Free a buffer allocated by hwloc_topology_export_xmlbuffer() ">hwloc_free_xmlbuffer()</a>.</dd>
<dd>
The <code>topology</code> parameter must be a valid topology but it is not required that it is related to <code>diff</code>. </dd></dl>

</div>
</div>
<a class="anchor" id="gae82a885a377aff78936c5f175b5980f8"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">int hwloc_topology_diff_load_xml </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00078.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const char *&#160;</td>
          <td class="paramname"><em>xmlpath</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00099.php#ga2cf1b17332fe5d95f2198f6340cfd288">hwloc_topology_diff_t</a> *&#160;</td>
          <td class="paramname"><em>diff</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">char **&#160;</td>
          <td class="paramname"><em>refname</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Load a list of topology differences from a XML file. </p>
<p>If not <code>NULL</code>, <code>refname</code> will be filled with the identifier string of the reference topology for the difference file, if any was specified in the XML file. This identifier is usually the name of the other XML file that contains the reference topology.</p>
<dl class="section note"><dt>Note</dt><dd>The <code>topology</code> parameter must be a valid topology but it is not required that it is related to <code>diff</code>.</dd>
<dd>
the pointer returned in refname should later be freed by the caller. </dd></dl>

</div>
</div>
<a class="anchor" id="ga09afc24f1c9860465ec352c4ac518dd4"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">int hwloc_topology_diff_load_xmlbuffer </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00078.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const char *&#160;</td>
          <td class="paramname"><em>xmlbuffer</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">int&#160;</td>
          <td class="paramname"><em>buflen</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00099.php#ga2cf1b17332fe5d95f2198f6340cfd288">hwloc_topology_diff_t</a> *&#160;</td>
          <td class="paramname"><em>diff</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">char **&#160;</td>
          <td class="paramname"><em>refname</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Load a list of topology differences from a XML buffer. </p>
<p>If not <code>NULL</code>, <code>refname</code> will be filled with the identifier string of the reference topology for the difference file, if any was specified in the XML file. This identifier is usually the name of the other XML file that contains the reference topology.</p>
<dl class="section note"><dt>Note</dt><dd>The <code>topology</code> parameter must be a valid topology but it is not required that it is related to <code>diff</code>.</dd>
<dd>
the pointer returned in refname should later be freed by the caller. </dd></dl>

</div>
</div>
</div><!-- contents -->
<?php
include_once("$topdir/includes/footer.inc");
