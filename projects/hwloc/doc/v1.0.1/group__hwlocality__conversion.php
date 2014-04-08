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
<!-- Generated by Doxygen 1.6.2 -->
<div class="navigation" id="top">
  <div class="tabs">
    <ul>
      <li><a href="index.php"><span>Main&nbsp;Page</span></a></li>
      <li><a href="pages.php"><span>Related&nbsp;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="annotated.php"><span>Data&nbsp;Structures</span></a></li>
      <li><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
</div>
<div class="contents">
<h1>Object/String Conversion</h1><table border="0" cellpadding="0" cellspacing="0">
<tr><td colspan="2"><h2>Functions</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> const char *&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__conversion.php#ga7c61920feca6fd9006d930dabfc09058">hwloc_obj_type_string</a> (<a class="el" href="group__hwlocality__types.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a> type) </td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Return a stringified topology object type.  <a href="#ga7c61920feca6fd9006d930dabfc09058"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> <a class="el" href="group__hwlocality__types.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a>&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__conversion.php#gade722091ae392fdc79557e797a16c370">hwloc_obj_type_of_string</a> (const char *string) </td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Return an object type from the string.  <a href="#gade722091ae392fdc79557e797a16c370"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> int&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__conversion.php#ga3ad856e8f3487d340c82a23b8a2a0351">hwloc_obj_type_snprintf</a> (char *restrict string, size_t size, <a class="el" href="structhwloc__obj.php">hwloc_obj_t</a> obj, int verbose)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Stringify the type of a given topology object into a human-readable form.  <a href="#ga3ad856e8f3487d340c82a23b8a2a0351"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> int&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__conversion.php#ga0db8286d7f3ceda8defd76e3e1e2b284">hwloc_obj_attr_snprintf</a> (char *restrict string, size_t size, <a class="el" href="structhwloc__obj.php">hwloc_obj_t</a> obj, const char *restrict separator, int verbose)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Stringify the attributes of a given topology object into a human-readable form.  <a href="#ga0db8286d7f3ceda8defd76e3e1e2b284"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> int&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__conversion.php#ga5c6a61a83f4790b421e2f62e9088446f">hwloc_obj_snprintf</a> (char *restrict string, size_t size, <a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="structhwloc__obj.php">hwloc_obj_t</a> obj, const char *restrict indexprefix, int verbose)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Stringify a given topology object into a human-readable form.  <a href="#ga5c6a61a83f4790b421e2f62e9088446f"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> int&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__conversion.php#gabbfb92224c992c0e2ecef6b6e45260f2">hwloc_obj_cpuset_snprintf</a> (char *restrict str, size_t size, size_t nobj, const <a class="el" href="structhwloc__obj.php">hwloc_obj_t</a> *restrict objs)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Stringify the cpuset containing a set of objects.  <a href="#gabbfb92224c992c0e2ecef6b6e45260f2"></a><br/></td></tr>
</table>
<hr/><h2>Function Documentation</h2>
<a class="anchor" id="ga0db8286d7f3ceda8defd76e3e1e2b284"></a><!-- doxytag: member="hwloc.h::hwloc_obj_attr_snprintf" ref="ga0db8286d7f3ceda8defd76e3e1e2b284" args="(char *restrict string, size_t size, hwloc_obj_t obj, const char *restrict separator, int verbose)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"> int hwloc_obj_attr_snprintf </td>
          <td>(</td>
          <td class="paramtype">char *restrict&nbsp;</td>
          <td class="paramname"> <em>string</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">size_t&nbsp;</td>
          <td class="paramname"> <em>size</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="structhwloc__obj.php">hwloc_obj_t</a>&nbsp;</td>
          <td class="paramname"> <em>obj</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const char *restrict&nbsp;</td>
          <td class="paramname"> <em>separator</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">int&nbsp;</td>
          <td class="paramname"> <em>verbose</em></td><td>&nbsp;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td><td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Stringify the attributes of a given topology object into a human-readable form. </p>
<p>Attribute values are separated by <code>separator</code>.</p>
<p>Only the major attributes are printed in non-verbose mode.</p>
<dl class="return"><dt><b>Returns:</b></dt><dd>how many characters were actually written (not including the ending \0), or -1 on error. </dd></dl>

</div>
</div>
<a class="anchor" id="gabbfb92224c992c0e2ecef6b6e45260f2"></a><!-- doxytag: member="hwloc.h::hwloc_obj_cpuset_snprintf" ref="gabbfb92224c992c0e2ecef6b6e45260f2" args="(char *restrict str, size_t size, size_t nobj, const hwloc_obj_t *restrict objs)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"> int hwloc_obj_cpuset_snprintf </td>
          <td>(</td>
          <td class="paramtype">char *restrict&nbsp;</td>
          <td class="paramname"> <em>str</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">size_t&nbsp;</td>
          <td class="paramname"> <em>size</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">size_t&nbsp;</td>
          <td class="paramname"> <em>nobj</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const <a class="el" href="structhwloc__obj.php">hwloc_obj_t</a> *restrict&nbsp;</td>
          <td class="paramname"> <em>objs</em></td><td>&nbsp;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td><td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Stringify the cpuset containing a set of objects. </p>
<dl class="return"><dt><b>Returns:</b></dt><dd>how many characters were actually written (not including the ending \0). </dd></dl>

</div>
</div>
<a class="anchor" id="ga5c6a61a83f4790b421e2f62e9088446f"></a><!-- doxytag: member="hwloc.h::hwloc_obj_snprintf" ref="ga5c6a61a83f4790b421e2f62e9088446f" args="(char *restrict string, size_t size, hwloc_topology_t topology, hwloc_obj_t obj, const char *restrict indexprefix, int verbose)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"> int hwloc_obj_snprintf </td>
          <td>(</td>
          <td class="paramtype">char *restrict&nbsp;</td>
          <td class="paramname"> <em>string</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">size_t&nbsp;</td>
          <td class="paramname"> <em>size</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&nbsp;</td>
          <td class="paramname"> <em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="structhwloc__obj.php">hwloc_obj_t</a>&nbsp;</td>
          <td class="paramname"> <em>obj</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const char *restrict&nbsp;</td>
          <td class="paramname"> <em>indexprefix</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">int&nbsp;</td>
          <td class="paramname"> <em>verbose</em></td><td>&nbsp;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td><td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Stringify a given topology object into a human-readable form. </p>
<dl class="note"><dt><b>Note:</b></dt><dd>This function is deprecated in favor of <a class="el" href="group__hwlocality__conversion.php#ga3ad856e8f3487d340c82a23b8a2a0351" title="Stringify the type of a given topology object into a human-readable form.">hwloc_obj_type_snprintf()</a> and <a class="el" href="group__hwlocality__conversion.php#ga0db8286d7f3ceda8defd76e3e1e2b284" title="Stringify the attributes of a given topology object into a human-readable form.">hwloc_obj_attr_snprintf()</a> since it is not very flexible and only prints physical/OS indexes.</dd></dl>
<p>Fill string <code>string</code> up to <code>size</code> characters with the description of topology object <code>obj</code> in topology <code>topology</code>.</p>
<p>If <code>verbose</code> is set, a longer description is used. Otherwise a short description is used.</p>
<p><code>indexprefix</code> is used to prefix the <code>os_index</code> attribute number of the object in the description. If <code>NULL</code>, the <code>#</code> character is used.</p>
<dl class="return"><dt><b>Returns:</b></dt><dd>how many characters were actually written (not including the ending \0), or -1 on error. </dd></dl>

</div>
</div>
<a class="anchor" id="gade722091ae392fdc79557e797a16c370"></a><!-- doxytag: member="hwloc.h::hwloc_obj_type_of_string" ref="gade722091ae392fdc79557e797a16c370" args="(const char *string) " -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"> <a class="el" href="group__hwlocality__types.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a> hwloc_obj_type_of_string </td>
          <td>(</td>
          <td class="paramtype">const char *&nbsp;</td>
          <td class="paramname"> <em>string</em></td>
          <td>&nbsp;)&nbsp;</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Return an object type from the string. </p>
<dl class="return"><dt><b>Returns:</b></dt><dd>-1 if unrecognized. </dd></dl>

</div>
</div>
<a class="anchor" id="ga3ad856e8f3487d340c82a23b8a2a0351"></a><!-- doxytag: member="hwloc.h::hwloc_obj_type_snprintf" ref="ga3ad856e8f3487d340c82a23b8a2a0351" args="(char *restrict string, size_t size, hwloc_obj_t obj, int verbose)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"> int hwloc_obj_type_snprintf </td>
          <td>(</td>
          <td class="paramtype">char *restrict&nbsp;</td>
          <td class="paramname"> <em>string</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">size_t&nbsp;</td>
          <td class="paramname"> <em>size</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="structhwloc__obj.php">hwloc_obj_t</a>&nbsp;</td>
          <td class="paramname"> <em>obj</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">int&nbsp;</td>
          <td class="paramname"> <em>verbose</em></td><td>&nbsp;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td><td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Stringify the type of a given topology object into a human-readable form. </p>
<p>It differs from <a class="el" href="group__hwlocality__conversion.php#ga7c61920feca6fd9006d930dabfc09058" title="Return a stringified topology object type.">hwloc_obj_type_string()</a> because it prints type attributes such as cache depth.</p>
<dl class="return"><dt><b>Returns:</b></dt><dd>how many characters were actually written (not including the ending \0), or -1 on error. </dd></dl>

</div>
</div>
<a class="anchor" id="ga7c61920feca6fd9006d930dabfc09058"></a><!-- doxytag: member="hwloc.h::hwloc_obj_type_string" ref="ga7c61920feca6fd9006d930dabfc09058" args="(hwloc_obj_type_t type) " -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"> const char* hwloc_obj_type_string </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="group__hwlocality__types.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a>&nbsp;</td>
          <td class="paramname"> <em>type</em></td>
          <td>&nbsp;)&nbsp;</td>
          <td> const</td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Return a stringified topology object type. </p>

</div>
</div>
</div>
<?php
include_once("$topdir/includes/footer.inc");