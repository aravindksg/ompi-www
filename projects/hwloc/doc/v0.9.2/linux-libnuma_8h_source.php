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
<!-- Generated by Doxygen 1.6.1 -->
<div class="navigation" id="top">
  <div class="tabs">
    <ul>
      <li><a href="index.php"><span>Main&nbsp;Page</span></a></li>
      <li><a href="pages.php"><span>Related&nbsp;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="annotated.php"><span>Data&nbsp;Structures</span></a></li>
      <li class="current"><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
  <div class="tabs">
    <ul>
      <li><a href="files.php"><span>File&nbsp;List</span></a></li>
      <li><a href="globals.php"><span>Globals</span></a></li>
    </ul>
  </div>
<h1>linux-libnuma.h</h1><a href="linux-libnuma_8h.php">Go to the documentation of this file.</a><div class="fragment"><pre class="fragment"><a name="l00001"></a>00001 <span class="comment">/*</span>
<a name="l00002"></a>00002 <span class="comment"> * Copyright © 2009 CNRS, INRIA, Université Bordeaux 1</span>
<a name="l00003"></a>00003 <span class="comment"> * See COPYING in top-level directory.</span>
<a name="l00004"></a>00004 <span class="comment"> */</span>
<a name="l00005"></a>00005 
<a name="l00013"></a>00013 <span class="preprocessor">#ifndef HWLOC_LINUX_LIBNUMA_H</span>
<a name="l00014"></a>00014 <span class="preprocessor"></span><span class="preprocessor">#define HWLOC_LINUX_LIBNUMA_H</span>
<a name="l00015"></a>00015 <span class="preprocessor"></span>
<a name="l00016"></a>00016 <span class="preprocessor">#include &lt;<a class="code" href="hwloc_8h.php" title="The hwloc API.">hwloc.h</a>&gt;</span>
<a name="l00017"></a>00017 <span class="preprocessor">#include &lt;numa.h&gt;</span>
<a name="l00018"></a>00018 <span class="preprocessor">#include &lt;assert.h&gt;</span>
<a name="l00019"></a>00019 
<a name="l00020"></a>00020 
<a name="l00036"></a>00036 <span class="keyword">static</span> inline <span class="keywordtype">void</span>
<a name="l00037"></a><a class="code" href="group__hwlocality__linux__libnuma__ulongs.php#ga7119f03aa7437b027edea3a32ebce265">00037</a> <a class="code" href="group__hwlocality__linux__libnuma__ulongs.php#ga7119f03aa7437b027edea3a32ebce265" title="Convert hwloc CPU set cpuset into the array of unsigned long mask.">hwloc_cpuset_to_linux_libnuma_ulongs</a>(<a class="code" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38" title="Topology context.">hwloc_topology_t</a> topology, <a class="code" href="group__hwlocality__cpuset.php#ga7366332f7090f5b54d4b25a0c2c4b411" title="Set of CPUs represented as an opaque pointer to an internal bitmask.">hwloc_cpuset_t</a> cpuset,
<a name="l00038"></a>00038                                     <span class="keywordtype">unsigned</span> <span class="keywordtype">long</span> *mask, <span class="keywordtype">unsigned</span> <span class="keywordtype">long</span> *maxnode)
<a name="l00039"></a>00039 {
<a name="l00040"></a>00040   <span class="keywordtype">unsigned</span> <span class="keywordtype">long</span> outmaxnode = -1;
<a name="l00041"></a>00041   <a class="code" href="structhwloc__obj.php" title="Structure of a topology object.">hwloc_obj_t</a> node = NULL;
<a name="l00042"></a>00042   <span class="keywordtype">unsigned</span> nbnodes = <a class="code" href="group__hwlocality__information.php#gad86a90c0d3501d90410fb1a4eb36f5d0" title="Returns the width of level type type.">hwloc_get_nbobjs_by_type</a>(topology, <a class="code" href="group__hwlocality__types.php#ggacd37bb612667dc437d66bfb175a8dc55aaf0964881117bdedf1a5e9332cd120dd" title="NUMA node. A set of processors around memory which the processors can directly access...">HWLOC_OBJ_NODE</a>);
<a name="l00043"></a>00043   <span class="keywordtype">int</span> i;
<a name="l00044"></a>00044 
<a name="l00045"></a>00045   <span class="keywordflow">for</span>(i=0; i&lt;*maxnode/HWLOC_BITS_PER_LONG; i++)
<a name="l00046"></a>00046     mask[i] = 0;
<a name="l00047"></a>00047 
<a name="l00048"></a>00048   <span class="keywordflow">if</span> (nbnodes) {
<a name="l00049"></a>00049     <span class="keywordflow">while</span> ((node = <a class="code" href="group__hwlocality__helper__find__coverings.php#gaad89905a7c9388283535296802d766cb" title="Iterate through same-type objects covering at least CPU set set.">hwloc_get_next_obj_covering_cpuset_by_type</a>(topology, cpuset, <a class="code" href="group__hwlocality__types.php#ggacd37bb612667dc437d66bfb175a8dc55aaf0964881117bdedf1a5e9332cd120dd" title="NUMA node. A set of processors around memory which the processors can directly access...">HWLOC_OBJ_NODE</a>, node)) != NULL) {
<a name="l00050"></a>00050       <span class="keywordflow">if</span> (node-&gt;<a class="code" href="structhwloc__obj.php#a79d45afa49e2bd18297660ac68820d91" title="OS-provided physical index number.">os_index</a> &gt;= *maxnode)
<a name="l00051"></a>00051         <span class="keywordflow">break</span>;
<a name="l00052"></a>00052       mask[node-&gt;<a class="code" href="structhwloc__obj.php#a79d45afa49e2bd18297660ac68820d91" title="OS-provided physical index number.">os_index</a>/HWLOC_BITS_PER_LONG] |= 1 &lt;&lt; (node-&gt;<a class="code" href="structhwloc__obj.php#a79d45afa49e2bd18297660ac68820d91" title="OS-provided physical index number.">os_index</a> % HWLOC_BITS_PER_LONG);
<a name="l00053"></a>00053       outmaxnode = node-&gt;<a class="code" href="structhwloc__obj.php#a79d45afa49e2bd18297660ac68820d91" title="OS-provided physical index number.">os_index</a>;
<a name="l00054"></a>00054     }
<a name="l00055"></a>00055 
<a name="l00056"></a>00056   } <span class="keywordflow">else</span> {
<a name="l00057"></a>00057     <span class="comment">/* if no numa, libnuma assumes we have a single node */</span>
<a name="l00058"></a>00058     <span class="keywordflow">if</span> (!<a class="code" href="group__hwlocality__cpuset.php#ga0c2a23ccf879c9e640a3a407bed94090" title="Test whether set set is zero.">hwloc_cpuset_iszero</a>(cpuset)) {
<a name="l00059"></a>00059       mask[0] = 1;
<a name="l00060"></a>00060       outmaxnode = 0;
<a name="l00061"></a>00061     }
<a name="l00062"></a>00062   }
<a name="l00063"></a>00063 
<a name="l00064"></a>00064   *maxnode = outmaxnode+1;
<a name="l00065"></a>00065 }
<a name="l00066"></a>00066 
<a name="l00076"></a>00076 <span class="keyword">static</span> inline <a class="code" href="group__hwlocality__cpuset.php#ga7366332f7090f5b54d4b25a0c2c4b411" title="Set of CPUs represented as an opaque pointer to an internal bitmask.">hwloc_cpuset_t</a>
<a name="l00077"></a><a class="code" href="group__hwlocality__linux__libnuma__ulongs.php#gaad80d59fee26a1e0ecf7a0bae76dc685">00077</a> <a class="code" href="group__hwlocality__linux__libnuma__ulongs.php#gaad80d59fee26a1e0ecf7a0bae76dc685" title="Convert the array of unsigned long mask into hwloc CPU set.">hwloc_cpuset_from_linux_libnuma_ulongs</a>(<a class="code" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38" title="Topology context.">hwloc_topology_t</a> topology,
<a name="l00078"></a>00078                                       <span class="keyword">const</span> <span class="keywordtype">unsigned</span> <span class="keywordtype">long</span> *mask, <span class="keywordtype">unsigned</span> <span class="keywordtype">long</span> maxnode)
<a name="l00079"></a>00079 {
<a name="l00080"></a>00080   <a class="code" href="group__hwlocality__cpuset.php#ga7366332f7090f5b54d4b25a0c2c4b411" title="Set of CPUs represented as an opaque pointer to an internal bitmask.">hwloc_cpuset_t</a> cpuset;
<a name="l00081"></a>00081   <a class="code" href="structhwloc__obj.php" title="Structure of a topology object.">hwloc_obj_t</a> node;
<a name="l00082"></a>00082   <span class="keywordtype">int</span> depth;
<a name="l00083"></a>00083   <span class="keywordtype">int</span> i;
<a name="l00084"></a>00084 
<a name="l00085"></a>00085   depth = <a class="code" href="group__hwlocality__information.php#ga8bec782e21be313750da70cf7428b374" title="Returns the depth of objects of type type.">hwloc_get_type_depth</a>(topology, <a class="code" href="group__hwlocality__types.php#ggacd37bb612667dc437d66bfb175a8dc55aaf0964881117bdedf1a5e9332cd120dd" title="NUMA node. A set of processors around memory which the processors can directly access...">HWLOC_OBJ_NODE</a>);
<a name="l00086"></a>00086   assert(depth != <a class="code" href="group__hwlocality__information.php#ga64c80d3e0501b321d217b1642d68e23d" title="Objects of given type exist at different depth in the topology.">HWLOC_TYPE_DEPTH_MULTIPLE</a>);
<a name="l00087"></a>00087 
<a name="l00088"></a>00088   <span class="keywordflow">if</span> (depth == <a class="code" href="group__hwlocality__information.php#ga9e86ce528f626330de2da7adb6c4e02e" title="No object of given type exists in the topology.">HWLOC_TYPE_DEPTH_UNKNOWN</a>) {
<a name="l00089"></a>00089     <span class="comment">/* if no numa, libnuma assumes we have a single node */</span>
<a name="l00090"></a>00090     <span class="keywordflow">if</span> (mask[0] &amp; 1)
<a name="l00091"></a>00091       cpuset = <a class="code" href="group__hwlocality__cpuset.php#ga19d8c163e4834ba69c808560aa5a89b3" title="Duplicate CPU set set by allocating a new CPU set and copying its contents.">hwloc_cpuset_dup</a>(<a class="code" href="group__hwlocality__helper__traversal__basic.php#gab39658e42f1046db0f8870a0d0ba9f42" title="Returns the top-object of the topology-tree. Its type is HWLOC_OBJ_SYSTEM.">hwloc_get_system_obj</a>(topology)-&gt;cpuset);
<a name="l00092"></a>00092     <span class="keywordflow">else</span>
<a name="l00093"></a>00093       cpuset = <a class="code" href="group__hwlocality__cpuset.php#ga82803256c7e78369aad77a2a9e5599a2" title="Allocate a new empty CPU set.">hwloc_cpuset_alloc</a>();
<a name="l00094"></a>00094 
<a name="l00095"></a>00095   } <span class="keywordflow">else</span> {
<a name="l00096"></a>00096     cpuset = <a class="code" href="group__hwlocality__cpuset.php#ga82803256c7e78369aad77a2a9e5599a2" title="Allocate a new empty CPU set.">hwloc_cpuset_alloc</a>();
<a name="l00097"></a>00097     <span class="keywordflow">for</span>(i=0; i&lt;maxnode; i++)
<a name="l00098"></a>00098       <span class="keywordflow">if</span> (mask[i/HWLOC_BITS_PER_LONG] &amp; (1 &lt;&lt; (i% HWLOC_BITS_PER_LONG))) {
<a name="l00099"></a>00099         node = <a class="code" href="group__hwlocality__traversal.php#gabf8a98ad085460a4982cc7b74c344b71" title="Returns the topology object at index index from depth depth.">hwloc_get_obj_by_depth</a>(topology, depth, i);
<a name="l00100"></a>00100         <span class="keywordflow">if</span> (node)
<a name="l00101"></a>00101           <a class="code" href="group__hwlocality__cpuset.php#gaae983503932659b0c4142716201d8f40" title="Or set modifier_set into set set.">hwloc_cpuset_orset</a>(cpuset, node-&gt;<a class="code" href="structhwloc__obj.php#a67925e0f2c47f50408fbdb9bddd0790f" title="CPUs covered by this object.">cpuset</a>);
<a name="l00102"></a>00102       }
<a name="l00103"></a>00103   }
<a name="l00104"></a>00104 
<a name="l00105"></a>00105   <span class="keywordflow">return</span> cpuset;
<a name="l00106"></a>00106 }
<a name="l00107"></a>00107 
<a name="l00124"></a>00124 <span class="keyword">static</span> inline <span class="keyword">struct </span>bitmask *
<a name="l00125"></a><a class="code" href="group__hwlocality__linux__libnuma__bitmask.php#ga66720508d673173aea250095be22822d">00125</a> <a class="code" href="group__hwlocality__linux__libnuma__bitmask.php#ga66720508d673173aea250095be22822d" title="Convert hwloc CPU set cpuset into the returned libnuma bitmask.">hwloc_cpuset_to_linux_libnuma_bitmask</a>(<a class="code" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38" title="Topology context.">hwloc_topology_t</a> topology, <a class="code" href="group__hwlocality__cpuset.php#ga7366332f7090f5b54d4b25a0c2c4b411" title="Set of CPUs represented as an opaque pointer to an internal bitmask.">hwloc_cpuset_t</a> cpuset)
<a name="l00126"></a>00126 {
<a name="l00127"></a>00127   <span class="keyword">struct </span>bitmask *bitmask;
<a name="l00128"></a>00128   <a class="code" href="structhwloc__obj.php" title="Structure of a topology object.">hwloc_obj_t</a> node = NULL;
<a name="l00129"></a>00129   <span class="keywordtype">unsigned</span> nbnodes = <a class="code" href="group__hwlocality__information.php#gad86a90c0d3501d90410fb1a4eb36f5d0" title="Returns the width of level type type.">hwloc_get_nbobjs_by_type</a>(topology, <a class="code" href="group__hwlocality__types.php#ggacd37bb612667dc437d66bfb175a8dc55aaf0964881117bdedf1a5e9332cd120dd" title="NUMA node. A set of processors around memory which the processors can directly access...">HWLOC_OBJ_NODE</a>);
<a name="l00130"></a>00130 
<a name="l00131"></a>00131   <span class="keywordflow">if</span> (nbnodes) {
<a name="l00132"></a>00132     bitmask = numa_bitmask_alloc(nbnodes);
<a name="l00133"></a>00133     <span class="keywordflow">if</span> (!bitmask)
<a name="l00134"></a>00134       <span class="keywordflow">return</span> NULL;
<a name="l00135"></a>00135     <span class="keywordflow">while</span> ((node = <a class="code" href="group__hwlocality__helper__find__coverings.php#gaad89905a7c9388283535296802d766cb" title="Iterate through same-type objects covering at least CPU set set.">hwloc_get_next_obj_covering_cpuset_by_type</a>(topology, cpuset, <a class="code" href="group__hwlocality__types.php#ggacd37bb612667dc437d66bfb175a8dc55aaf0964881117bdedf1a5e9332cd120dd" title="NUMA node. A set of processors around memory which the processors can directly access...">HWLOC_OBJ_NODE</a>, node)) != NULL)
<a name="l00136"></a>00136       numa_bitmask_setbit(bitmask, node-&gt;<a class="code" href="structhwloc__obj.php#a79d45afa49e2bd18297660ac68820d91" title="OS-provided physical index number.">os_index</a>);
<a name="l00137"></a>00137 
<a name="l00138"></a>00138   } <span class="keywordflow">else</span> {
<a name="l00139"></a>00139     <span class="comment">/* if no numa, libnuma assumes we have a single node */</span>
<a name="l00140"></a>00140     bitmask = numa_bitmask_alloc(1);
<a name="l00141"></a>00141     <span class="keywordflow">if</span> (!bitmask)
<a name="l00142"></a>00142       <span class="keywordflow">return</span> NULL;
<a name="l00143"></a>00143     <span class="keywordflow">if</span> (!<a class="code" href="group__hwlocality__cpuset.php#ga0c2a23ccf879c9e640a3a407bed94090" title="Test whether set set is zero.">hwloc_cpuset_iszero</a>(cpuset))
<a name="l00144"></a>00144       numa_bitmask_setbit(bitmask, 0);
<a name="l00145"></a>00145   }
<a name="l00146"></a>00146 
<a name="l00147"></a>00147   <span class="keywordflow">return</span> bitmask;
<a name="l00148"></a>00148 }
<a name="l00149"></a>00149 
<a name="l00155"></a>00155 <span class="keyword">static</span> inline <a class="code" href="group__hwlocality__cpuset.php#ga7366332f7090f5b54d4b25a0c2c4b411" title="Set of CPUs represented as an opaque pointer to an internal bitmask.">hwloc_cpuset_t</a>
<a name="l00156"></a><a class="code" href="group__hwlocality__linux__libnuma__bitmask.php#gaa7ac171ac41f209bfbc710ca690affe0">00156</a> <a class="code" href="group__hwlocality__linux__libnuma__bitmask.php#gaa7ac171ac41f209bfbc710ca690affe0" title="Convert libnuma bitmask bitmask into hwloc CPU set cpuset.">hwloc_cpuset_from_linux_libnuma_bitmask</a>(<a class="code" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38" title="Topology context.">hwloc_topology_t</a> topology,
<a name="l00157"></a>00157                                        <span class="keyword">const</span> <span class="keyword">struct</span> bitmask *bitmask)
<a name="l00158"></a>00158 {
<a name="l00159"></a>00159   <a class="code" href="group__hwlocality__cpuset.php#ga7366332f7090f5b54d4b25a0c2c4b411" title="Set of CPUs represented as an opaque pointer to an internal bitmask.">hwloc_cpuset_t</a> cpuset;
<a name="l00160"></a>00160   <a class="code" href="structhwloc__obj.php" title="Structure of a topology object.">hwloc_obj_t</a> node;
<a name="l00161"></a>00161   <span class="keywordtype">int</span> depth;
<a name="l00162"></a>00162   <span class="keywordtype">int</span> i;
<a name="l00163"></a>00163 
<a name="l00164"></a>00164   depth = <a class="code" href="group__hwlocality__information.php#ga8bec782e21be313750da70cf7428b374" title="Returns the depth of objects of type type.">hwloc_get_type_depth</a>(topology, <a class="code" href="group__hwlocality__types.php#ggacd37bb612667dc437d66bfb175a8dc55aaf0964881117bdedf1a5e9332cd120dd" title="NUMA node. A set of processors around memory which the processors can directly access...">HWLOC_OBJ_NODE</a>);
<a name="l00165"></a>00165   assert(depth != <a class="code" href="group__hwlocality__information.php#ga64c80d3e0501b321d217b1642d68e23d" title="Objects of given type exist at different depth in the topology.">HWLOC_TYPE_DEPTH_MULTIPLE</a>);
<a name="l00166"></a>00166 
<a name="l00167"></a>00167   <span class="keywordflow">if</span> (depth == <a class="code" href="group__hwlocality__information.php#ga9e86ce528f626330de2da7adb6c4e02e" title="No object of given type exists in the topology.">HWLOC_TYPE_DEPTH_UNKNOWN</a>) {
<a name="l00168"></a>00168     <span class="comment">/* if no numa, libnuma assumes we have a single node */</span>
<a name="l00169"></a>00169     <span class="keywordflow">if</span> (numa_bitmask_isbitset(bitmask, 0))
<a name="l00170"></a>00170       cpuset = <a class="code" href="group__hwlocality__cpuset.php#ga19d8c163e4834ba69c808560aa5a89b3" title="Duplicate CPU set set by allocating a new CPU set and copying its contents.">hwloc_cpuset_dup</a>(<a class="code" href="group__hwlocality__helper__traversal__basic.php#gab39658e42f1046db0f8870a0d0ba9f42" title="Returns the top-object of the topology-tree. Its type is HWLOC_OBJ_SYSTEM.">hwloc_get_system_obj</a>(topology)-&gt;cpuset);
<a name="l00171"></a>00171     <span class="keywordflow">else</span>
<a name="l00172"></a>00172       cpuset = <a class="code" href="group__hwlocality__cpuset.php#ga82803256c7e78369aad77a2a9e5599a2" title="Allocate a new empty CPU set.">hwloc_cpuset_alloc</a>();
<a name="l00173"></a>00173 
<a name="l00174"></a>00174   } <span class="keywordflow">else</span> {
<a name="l00175"></a>00175     cpuset = <a class="code" href="group__hwlocality__cpuset.php#ga82803256c7e78369aad77a2a9e5599a2" title="Allocate a new empty CPU set.">hwloc_cpuset_alloc</a>();
<a name="l00176"></a>00176     <span class="keywordflow">for</span>(i=0; i&lt;NUMA_NUM_NODES; i++)
<a name="l00177"></a>00177       <span class="keywordflow">if</span> (numa_bitmask_isbitset(bitmask, i)) {
<a name="l00178"></a>00178         node = <a class="code" href="group__hwlocality__traversal.php#gabf8a98ad085460a4982cc7b74c344b71" title="Returns the topology object at index index from depth depth.">hwloc_get_obj_by_depth</a>(topology, depth, i);
<a name="l00179"></a>00179         <span class="keywordflow">if</span> (node)
<a name="l00180"></a>00180           <a class="code" href="group__hwlocality__cpuset.php#gaae983503932659b0c4142716201d8f40" title="Or set modifier_set into set set.">hwloc_cpuset_orset</a>(cpuset, node-&gt;<a class="code" href="structhwloc__obj.php#a67925e0f2c47f50408fbdb9bddd0790f" title="CPUs covered by this object.">cpuset</a>);
<a name="l00181"></a>00181       }
<a name="l00182"></a>00182   }
<a name="l00183"></a>00183 
<a name="l00184"></a>00184   <span class="keywordflow">return</span> cpuset;
<a name="l00185"></a>00185 }
<a name="l00186"></a>00186 
<a name="l00191"></a>00191 <span class="preprocessor">#ifdef NUMA_VERSION1_COMPATIBILITY</span>
<a name="l00192"></a>00192 <span class="preprocessor"></span>
<a name="l00202"></a>00202 <span class="keyword">static</span> inline <span class="keywordtype">void</span>
<a name="l00203"></a><a class="code" href="group__hwlocality__linux__libnuma__nodemask.php#gad6c037010e89674b799ed8131d7a632c">00203</a> <a class="code" href="group__hwlocality__linux__libnuma__nodemask.php#gad6c037010e89674b799ed8131d7a632c" title="Convert hwloc CPU set cpuset into libnuma nodemask nodemask.">hwloc_cpuset_to_linux_libnuma_nodemask</a>(<a class="code" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38" title="Topology context.">hwloc_topology_t</a> topology, <a class="code" href="group__hwlocality__cpuset.php#ga7366332f7090f5b54d4b25a0c2c4b411" title="Set of CPUs represented as an opaque pointer to an internal bitmask.">hwloc_cpuset_t</a> cpuset,
<a name="l00204"></a>00204                                       nodemask_t *nodemask)
<a name="l00205"></a>00205 {
<a name="l00206"></a>00206   <a class="code" href="structhwloc__obj.php" title="Structure of a topology object.">hwloc_obj_t</a> node = NULL;
<a name="l00207"></a>00207   <span class="keywordtype">unsigned</span> nbnodes = <a class="code" href="group__hwlocality__information.php#gad86a90c0d3501d90410fb1a4eb36f5d0" title="Returns the width of level type type.">hwloc_get_nbobjs_by_type</a>(topology, <a class="code" href="group__hwlocality__types.php#ggacd37bb612667dc437d66bfb175a8dc55aaf0964881117bdedf1a5e9332cd120dd" title="NUMA node. A set of processors around memory which the processors can directly access...">HWLOC_OBJ_NODE</a>);
<a name="l00208"></a>00208 
<a name="l00209"></a>00209   nodemask_zero(nodemask);
<a name="l00210"></a>00210   <span class="keywordflow">if</span> (nbnodes) {
<a name="l00211"></a>00211     <span class="keywordflow">while</span> ((node = <a class="code" href="group__hwlocality__helper__find__coverings.php#gaad89905a7c9388283535296802d766cb" title="Iterate through same-type objects covering at least CPU set set.">hwloc_get_next_obj_covering_cpuset_by_type</a>(topology, cpuset, <a class="code" href="group__hwlocality__types.php#ggacd37bb612667dc437d66bfb175a8dc55aaf0964881117bdedf1a5e9332cd120dd" title="NUMA node. A set of processors around memory which the processors can directly access...">HWLOC_OBJ_NODE</a>, node)) != NULL)
<a name="l00212"></a>00212       nodemask_set(nodemask, node-&gt;<a class="code" href="structhwloc__obj.php#a79d45afa49e2bd18297660ac68820d91" title="OS-provided physical index number.">os_index</a>);
<a name="l00213"></a>00213 
<a name="l00214"></a>00214   } <span class="keywordflow">else</span> {
<a name="l00215"></a>00215     <span class="comment">/* if no numa, libnuma assumes we have a single node */</span>
<a name="l00216"></a>00216     <span class="keywordflow">if</span> (!<a class="code" href="group__hwlocality__cpuset.php#ga0c2a23ccf879c9e640a3a407bed94090" title="Test whether set set is zero.">hwloc_cpuset_iszero</a>(cpuset))
<a name="l00217"></a>00217       nodemask_set(nodemask, 0);
<a name="l00218"></a>00218   }
<a name="l00219"></a>00219 }
<a name="l00220"></a>00220 
<a name="l00226"></a>00226 <span class="keyword">static</span> inline <a class="code" href="group__hwlocality__cpuset.php#ga7366332f7090f5b54d4b25a0c2c4b411" title="Set of CPUs represented as an opaque pointer to an internal bitmask.">hwloc_cpuset_t</a>
<a name="l00227"></a><a class="code" href="group__hwlocality__linux__libnuma__nodemask.php#gac199bbdcd7913ce17bd36a168e00991f">00227</a> <a class="code" href="group__hwlocality__linux__libnuma__nodemask.php#gac199bbdcd7913ce17bd36a168e00991f" title="Convert libnuma nodemask nodemask into hwloc CPU set cpuset.">hwloc_cpuset_from_linux_libnuma_nodemask</a>(<a class="code" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38" title="Topology context.">hwloc_topology_t</a> topology,
<a name="l00228"></a>00228                                         <span class="keyword">const</span> nodemask_t *nodemask)
<a name="l00229"></a>00229 {
<a name="l00230"></a>00230   <a class="code" href="group__hwlocality__cpuset.php#ga7366332f7090f5b54d4b25a0c2c4b411" title="Set of CPUs represented as an opaque pointer to an internal bitmask.">hwloc_cpuset_t</a> cpuset;
<a name="l00231"></a>00231   <a class="code" href="structhwloc__obj.php" title="Structure of a topology object.">hwloc_obj_t</a> node;
<a name="l00232"></a>00232   <span class="keywordtype">int</span> depth;
<a name="l00233"></a>00233   <span class="keywordtype">int</span> i;
<a name="l00234"></a>00234 
<a name="l00235"></a>00235   depth = <a class="code" href="group__hwlocality__information.php#ga8bec782e21be313750da70cf7428b374" title="Returns the depth of objects of type type.">hwloc_get_type_depth</a>(topology, <a class="code" href="group__hwlocality__types.php#ggacd37bb612667dc437d66bfb175a8dc55aaf0964881117bdedf1a5e9332cd120dd" title="NUMA node. A set of processors around memory which the processors can directly access...">HWLOC_OBJ_NODE</a>);
<a name="l00236"></a>00236   assert(depth != <a class="code" href="group__hwlocality__information.php#ga64c80d3e0501b321d217b1642d68e23d" title="Objects of given type exist at different depth in the topology.">HWLOC_TYPE_DEPTH_MULTIPLE</a>);
<a name="l00237"></a>00237 
<a name="l00238"></a>00238   <span class="keywordflow">if</span> (depth == <a class="code" href="group__hwlocality__information.php#ga9e86ce528f626330de2da7adb6c4e02e" title="No object of given type exists in the topology.">HWLOC_TYPE_DEPTH_UNKNOWN</a>) {
<a name="l00239"></a>00239     <span class="comment">/* if no numa, libnuma assumes we have a single node */</span>
<a name="l00240"></a>00240     <span class="keywordflow">if</span> (nodemask_isset(nodemask, 0))
<a name="l00241"></a>00241       cpuset = <a class="code" href="group__hwlocality__cpuset.php#ga19d8c163e4834ba69c808560aa5a89b3" title="Duplicate CPU set set by allocating a new CPU set and copying its contents.">hwloc_cpuset_dup</a>(<a class="code" href="group__hwlocality__helper__traversal__basic.php#gab39658e42f1046db0f8870a0d0ba9f42" title="Returns the top-object of the topology-tree. Its type is HWLOC_OBJ_SYSTEM.">hwloc_get_system_obj</a>(topology)-&gt;cpuset);
<a name="l00242"></a>00242     <span class="keywordflow">else</span>
<a name="l00243"></a>00243       cpuset = <a class="code" href="group__hwlocality__cpuset.php#ga82803256c7e78369aad77a2a9e5599a2" title="Allocate a new empty CPU set.">hwloc_cpuset_alloc</a>();
<a name="l00244"></a>00244 
<a name="l00245"></a>00245   } <span class="keywordflow">else</span> {
<a name="l00246"></a>00246     cpuset = <a class="code" href="group__hwlocality__cpuset.php#ga82803256c7e78369aad77a2a9e5599a2" title="Allocate a new empty CPU set.">hwloc_cpuset_alloc</a>();
<a name="l00247"></a>00247     <span class="keywordflow">for</span>(i=0; i&lt;NUMA_NUM_NODES; i++)
<a name="l00248"></a>00248       <span class="keywordflow">if</span> (nodemask_isset(nodemask, i)) {
<a name="l00249"></a>00249         node = <a class="code" href="group__hwlocality__traversal.php#gabf8a98ad085460a4982cc7b74c344b71" title="Returns the topology object at index index from depth depth.">hwloc_get_obj_by_depth</a>(topology, depth, i);
<a name="l00250"></a>00250         <span class="keywordflow">if</span> (node)
<a name="l00251"></a>00251           <a class="code" href="group__hwlocality__cpuset.php#gaae983503932659b0c4142716201d8f40" title="Or set modifier_set into set set.">hwloc_cpuset_orset</a>(cpuset, node-&gt;<a class="code" href="structhwloc__obj.php#a67925e0f2c47f50408fbdb9bddd0790f" title="CPUs covered by this object.">cpuset</a>);
<a name="l00252"></a>00252       }
<a name="l00253"></a>00253   }
<a name="l00254"></a>00254 
<a name="l00255"></a>00255   <span class="keywordflow">return</span> cpuset;
<a name="l00256"></a>00256 }
<a name="l00257"></a>00257 
<a name="l00259"></a>00259 <span class="preprocessor">#endif </span><span class="comment">/* NUMA_VERSION1_COMPATIBILITY */</span>
<a name="l00260"></a>00260 
<a name="l00261"></a>00261 
<a name="l00262"></a>00262 <span class="preprocessor">#endif </span><span class="comment">/* HWLOC_LINUX_NUMA_H */</span>
</pre></div></div>
<?php
include_once("$topdir/includes/footer.inc");