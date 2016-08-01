<?
$subject_val = "Re: [OMPI users] Windows CMake build problems ... (cont.)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 25 04:34:16 2010" -->
<!-- isoreceived="20100125093416" -->
<!-- sent="Mon, 25 Jan 2010 02:34:08 -0700" -->
<!-- isosent="20100125093408" -->
<!-- name="cjohnson_at_[hidden]" -->
<!-- email="cjohnson_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Windows CMake build problems ... (cont.)" -->
<!-- id="20100125023408.0430d53b3e916c69cc97ff130928da34.aa4114869a.wbe_at_email02.secureserver.net" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[OMPI users] Windows CMake build problems ... (cont.)" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> Re: [OMPI users] Windows CMake build problems ... (cont.)<br>
<strong>From:</strong> <a href="mailto:cjohnson_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Windows%20CMake%20build%20problems%20...%20(cont.)"><em>cjohnson_at_[hidden]</em></a><br>
<strong>Date:</strong> 2010-01-25 04:34:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11861.php">Andreea Costea: "Re: [OMPI users] Checkpoint/Restart error"</a>
<li><strong>Previous message:</strong> <a href="11859.php">Shiqing Fan: "Re: [OMPI users] Windows CMake build problems ... (cont.)"</a>
<li><strong>Maybe in reply to:</strong> <a href="11762.php">cjohnson_at_[hidden]: "[OMPI users] Windows CMake build problems ... (cont.)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11865.php">Jeff Squyres: "Re: [OMPI users] Windows CMake build problems ... (cont.)"</a>
<li><strong>Reply:</strong> <a href="11865.php">Jeff Squyres: "Re: [OMPI users] Windows CMake build problems ... (cont.)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<body><span style="font-family:Verdana; color:#000000; font-size:10pt;"><div>Thanks, that second part about the wrappers was what I was looking for.</div>
<div>&nbsp;</div>
<div>Charlie ...&nbsp;</div>
<div>&nbsp;</div>
<BLOCKQUOTE style="BORDER-LEFT: blue 2px solid; PADDING-LEFT: 8px; FONT-FAMILY: verdana; COLOR: black; MARGIN-LEFT: 8px; FONT-SIZE: 10pt" id=replyBlockquote webmail="1">
<div   >-------- Original Message --------<BR>Subject: Re: [OMPI users] Windows CMake build problems ... (cont.)<BR>From: Shiqing Fan &lt;fan@hlrs.de&gt;<BR>Date: Mon, January 25, 2010 2:09 am<BR>To: cjohnson@valverdecomputing.com<BR>Cc: Open MPI Users &lt;users@open-mpi.org&gt;<BR><BR><BR>Hi Charlie,<BR><BR>Actually, to compile and link your application with Open MPI on Windows <BR>is similar as on Linux. You have to link your application against the <BR>generated Open MPI libraries, e.g. libopen-mpi.lib (don't forget the <BR>suffix 'd' if you build debug version of the OMPI libraries, e.g. <BR>libopen-mpid.lib).<BR><BR>But according to the information you provided, I assume that you only <BR>added the search path into the project, that's not enough, you should <BR>probably add the library names into "Project Property Pages" -&gt; <BR>"Configuration Properties" -&gt; Linker -&gt; Input -&gt; "Additional <BR>Dependencies", normally only libopen-mpi.lib (or libopen-mpid.lib) would <BR>be enough, so that Visual Studio will know which libraries to link to.<BR><BR>Besides, the Open MPI compiler wrappers should also work on Windows, in <BR>this case you just need to open a "Visual Studio command prompt" with <BR>the Open MPI path env added (e.g. "set PATH=c:\Program <BR>Files\OpenMPI_v1.4\bin;%PATH%"), and simply run command like:<BR><BR>&gt; mpicc app.c<BR><BR>and<BR><BR>&gt; mpirun -np 2 app.exe<BR><BR><BR>Please note that, before executing the application, Open MPI has to be <BR>installed somewhere either by build the "INSTALL" project or by running <BR>the generated installer, so that the correct Open MPI folder structure <BR>could be created.<BR><BR><BR>Regards,<BR>Shiqing<BR><BR><BR>cjohnson@valverdecomputing.com wrote:<BR>&gt; OK, so I'm a little farther on and perplexed.<BR>&gt; <BR>&gt; As I said, Visual C++ 2005 (release 8.0.50727.867) build <BR>&gt; of OpenMPI 1.4, using CMake 2.6.4, built everything and it all linked.<BR>&gt; <BR>&gt; Went ahead and built the PACKAGE item in the OpenMPI.sln project, <BR>&gt; which made a zip file and an installer (although it was not obvious <BR>&gt; where to look for this , what its name was, etc., I figured it out by <BR>&gt; dates on files).<BR>&gt; <BR>&gt; Another thing that''s not obvious, is how to shoehorn your code into a <BR>&gt; VCC project that will successfully build.<BR>&gt; <BR>&gt; I created a project from existing files in a place where the include <BR>&gt; on the mpi.h would be found and examples, etc. did compile.<BR>&gt; <BR>&gt; However, they did not find any of the library routines. Link errors.<BR>&gt; <BR>&gt; So, I added in the generated libraries location into the search <BR>&gt; locations for libraries.<BR>&gt; <BR>&gt; No good.<BR>&gt; <BR>&gt; So, I added all of the generated libraries into the VCC project I created.<BR>&gt; <BR>&gt; No good.<BR>&gt; <BR>&gt; How does one do this (aside from rigging up something through CMake, <BR>&gt; cygwin, minGW, or MS SFU)?<BR>&gt; <BR>&gt; Charlie ...<BR>&gt; <BR>&gt;<BR>&gt; -------- Original Message --------<BR>&gt; Subject: Re: [OMPI users] Windows CMake build problems ... (cont.)<BR>&gt; From: Shiqing Fan &lt;fan@hlrs.de&gt;<BR>&gt; Date: Fri, January 15, 2010 2:56 am<BR>&gt; To: cjohnson@valverdecomputing.com<BR>&gt; Cc: Open MPI Users &lt;users@open-mpi.org&gt;<BR>&gt;<BR>&gt;<BR>&gt; Hi Charlie,<BR>&gt;<BR>&gt; Glad to hear that you compiled it successfully.<BR>&gt;<BR>&gt; The error you got with 1.3.4 is a bug that the CMake script didn't<BR>&gt; set<BR>&gt; the SVN information correctly, and it has been fixed in 1.4 and later.<BR>&gt;<BR>&gt;<BR>&gt; Thanks,<BR>&gt; Shiqing<BR>&gt;<BR>&gt;<BR>&gt; cjohnson@valverdecomputing.com wrote:<BR>&gt; &gt; Yes that was it.<BR>&gt; &gt;<BR>&gt; &gt; A much improved result now from CMake 2.6.4, no errors from<BR>&gt; compiling<BR>&gt; &gt; openmpi-1.4:<BR>&gt; &gt;<BR>&gt; &gt; 1&gt;libopen-pal - 0 error(s), 9 warning(s)<BR>&gt; &gt; 2&gt;libopen-rte - 0 error(s), 7 warning(s)<BR>&gt; &gt; 3&gt;opal-restart - 0 error(s), 0 warning(s)<BR>&gt; &gt; 4&gt;opal-wrapper - 0 error(s), 0 warning(s)<BR>&gt; &gt; 5&gt;libmpi - 0 error(s), 42 warning(s)<BR>&gt; &gt; 6&gt;orte-checkpoint - 0 error(s), 0 warning(s)<BR>&gt; &gt; 7&gt;orte-ps - 0 error(s), 0 warning(s)<BR>&gt; &gt; 8&gt;orted - 0 error(s), 0 warning(s)<BR>&gt; &gt; 9&gt;orte-clean - 0 error(s), 0 warning(s)<BR>&gt; &gt; 10&gt;orterun - 0 error(s), 3 warning(s)<BR>&gt; &gt; 11&gt;ompi_info - 0 error(s), 0 warning(s)<BR>&gt; &gt; 12&gt;ompi-server - 0 error(s), 0 warning(s)<BR>&gt; &gt; 13&gt;libmpi_cxx - 0 error(s), 61 warning(s)<BR>&gt; &gt; ========== Build: 13 succeeded, 0 failed, 1 up-to-date, 0 skipped<BR>&gt; &gt; ==========<BR>&gt; &gt;<BR>&gt; &gt; And only one failure from compiling openmpi-1.3.4 (the ompi_info<BR>&gt; project):<BR>&gt; &gt;<BR>&gt; &gt; &gt; 1&gt;libopen-pal - 0 error(s), 9 warning(s)<BR>&gt; &gt; &gt; 2&gt;libopen-rte - 0 error(s), 7 warning(s)<BR>&gt; &gt; &gt; 3&gt;opal-restart - 0 error(s), 0 warning(s)<BR>&gt; &gt; &gt; 4&gt;opal-wrapper - 0 error(s), 0 warning(s)<BR>&gt; &gt; &gt; 5&gt;orte-checkpoint - 0 error(s), 0 warning(s)<BR>&gt; &gt; &gt; 6&gt;libmpi - 0 error(s), 42 warning(s)<BR>&gt; &gt; &gt; 7&gt;orte-ps - 0 error(s), 0 warning(s)<BR>&gt; &gt; &gt; 8&gt;orted - 0 error(s), 0 warning(s)<BR>&gt; &gt; &gt; 9&gt;orte-clean - 0 error(s), 0 warning(s)<BR>&gt; &gt; &gt; 10&gt;orterun - 0 error(s), 3 warning(s)<BR>&gt; &gt; &gt; 11&gt;ompi_info - 3 error(s), 0 warning(s)<BR>&gt; &gt; &gt; 12&gt;ompi-server - 0 error(s), 0 warning(s)<BR>&gt; &gt; &gt; 13&gt;libmpi_cxx - 0 error(s), 61 warning(s)<BR>&gt; &gt; &gt; ========== Rebuild All: 13 succeeded, 1 failed, 0 skipped<BR>&gt; ==========<BR>&gt; &gt;<BR>&gt; &gt; Here's the listing from the non-linking project:<BR>&gt; &gt;<BR>&gt; &gt; 11&gt;------ Rebuild All started: Project: ompi_info, Configuration:<BR>&gt; &gt; Debug Win32 ------<BR>&gt; &gt; 11&gt;Deleting intermediate and output files for project 'ompi_info',<BR>&gt; &gt; configuration 'Debug|Win32'<BR>&gt; &gt; 11&gt;Compiling...<BR>&gt; &gt; 11&gt;version.cc<BR>&gt; &gt; 11&gt;..\..\..\..\openmpi-1.3.4\ompi\tools\ompi_info\version.cc(136) :<BR>&gt; &gt; error C2059: syntax error : ','<BR>&gt; &gt; 11&gt;..\..\..\..\openmpi-1.3.4\ompi\tools\ompi_info\version.cc(147) :<BR>&gt; &gt; error C2059: syntax error : ','<BR>&gt; &gt; 11&gt;..\..\..\..\openmpi-1.3.4\ompi\tools\ompi_info\version.cc(158) :<BR>&gt; &gt; error C2059: syntax error : ','<BR>&gt; &gt; 11&gt;param.cc<BR>&gt; &gt; 11&gt;output.cc<BR>&gt; &gt; 11&gt;ompi_info.cc<BR>&gt; &gt; 11&gt;components.cc<BR>&gt; &gt; 11&gt;Generating Code...<BR>&gt; &gt; 11&gt;Build log was saved at<BR>&gt; &gt; "<A href="file:///c:/prog/mon/ompi/tools/ompi_info/ompi_info.dir/Debug/BuildLog.htm" target=_blank>file://c:\prog\mon\ompi\tools\ompi_info\ompi_info.dir\Debug\BuildLog.htm</A><BR>&gt; &lt;<A href="file:///c:/prog/mon/ompi/tools/ompi_info/ompi_info.dir/Debug/BuildLog.htm" target=_blank>file:///c:/prog/mon/ompi/tools/ompi_info/ompi_info.dir/Debug/BuildLog.htm</A>&gt;"<BR>&gt; &gt; 11&gt;ompi_info - 3 error(s), 0 warning(s)<BR>&gt; &gt;<BR>&gt; &gt; Thank you Shiqing !<BR>&gt; &gt;<BR>&gt; &gt; Charlie ...<BR>&gt; &gt;<BR>&gt; &gt; -------- Original Message --------<BR>&gt; &gt; Subject: Re: [OMPI users] Windows CMake build problems ... (cont.)<BR>&gt; &gt; From: Shiqing Fan &lt;fan@hlrs.de&gt;<BR>&gt; &gt; Date: Thu, January 14, 2010 11:20 am<BR>&gt; &gt; To: Open MPI Users &lt;users@open-mpi.org&gt;,<BR>&gt; &gt; cjohnson@valverdecomputing.com<BR>&gt; &gt;<BR>&gt; &gt;<BR>&gt; &gt; Hi Charlie,<BR>&gt; &gt;<BR>&gt; &gt; The problem turns out to be the different behavior of one CMake<BR>&gt; &gt; macro in<BR>&gt; &gt; different version of CMake. And it's fixed in Open MPI trunk with<BR>&gt; &gt; r22405. I also created a ticket to move the fix over to 1.4<BR>&gt; &gt; branch, see<BR>&gt; &gt; #2169: <a href="https://svn.open-mpi.org/trac/ompi/ticket/2169" target=_blank>https://svn.open-mpi.org/trac/ompi/ticket/2169</a> .<BR>&gt; &gt;<BR>&gt; &gt; So you could either switch to use OMPI trunk or use CMake 2.6 to<BR>&gt; &gt; solve<BR>&gt; &gt; the problem. Thanks a lot.<BR>&gt; &gt;<BR>&gt; &gt;<BR>&gt; &gt; Best Regards,<BR>&gt; &gt; Shiqing<BR>&gt; &gt;<BR>&gt; &gt;<BR>&gt; &gt; cjohnson@valverdecomputing.com wrote:<BR>&gt; &gt; &gt; The OpenMPI build problem I'm having occurs in both OpenMPI 1.4<BR>&gt; &gt; and 1.3.4.<BR>&gt; &gt; &gt;<BR>&gt; &gt; &gt; I am on a Windows 7 (US) Enterprise (x86) OS on an HP system with<BR>&gt; &gt; &gt; Intel core 2 extreme x9000 (4GB RAM), using the 2005 Visual<BR>&gt; &gt; Studio for<BR>&gt; &gt; &gt; S/W Architects (release 8.0.50727.867).<BR>&gt; &gt; &gt;<BR>&gt; &gt; &gt; [That release has everything the platform SDK would have.]<BR>&gt; &gt; &gt;<BR>&gt; &gt; &gt; I'm using CMake 2.8 to generate code, I used it correctly,<BR>&gt; &gt; pointing at<BR>&gt; &gt; &gt; the root directory where the makelists are located for the source<BR>&gt; &gt; side<BR>&gt; &gt; &gt; and to an empty directory for the build side: did configure,<BR>&gt; _*I did<BR>&gt; &gt; &gt; not click debug this time as suggested by Shiqing*_, configure<BR>&gt; &gt; again,<BR>&gt; &gt; &gt; generate and opened the OpenMPI.sln file created by CMake. Then I<BR>&gt; &gt; &gt; right-clicked on the "ALL_BUILD" project and selected "build". Then<BR>&gt; &gt; &gt; did one "rebuild", just in case build order might get one more<BR>&gt; &gt; success<BR>&gt; &gt; &gt; (which it seemed to, but I could not find).<BR>&gt; &gt; &gt;<BR>&gt; &gt; &gt; 2 projects built, 12 did not. I have the build listing. [I'm<BR>&gt; &gt; afraid of<BR>&gt; &gt; &gt; what the mailing list server would do if I attached it to this<BR>&gt; &gt; email.]<BR>&gt; &gt; &gt;<BR>&gt; &gt; &gt; All the compiles were successful (warnings at most.) All the errors<BR>&gt; &gt; &gt; were were from linking the VC projects:<BR>&gt; &gt; &gt;<BR>&gt; &gt; &gt; *1&gt;libopen-pal - 0 error(s), 9 warning(s)*<BR>&gt; &gt; &gt; 3&gt;opal-restart - 32 error(s), 0 warning(s)<BR>&gt; &gt; &gt; 4&gt;opal-wrapper - 21 error(s), 0 warning(s)<BR>&gt; &gt; &gt; 2&gt;libopen-rte - 749 error(s), 7 warning(s)<BR>&gt; &gt; &gt; 5&gt;orte-checkpoint - 32 error(s), 0 warning(s)<BR>&gt; &gt; &gt; 7&gt;orte-ps - 28 error(s), 0 warning(s)<BR>&gt; &gt; &gt; 8&gt;orted - 2 error(s), 0 warning(s)<BR>&gt; &gt; &gt; 9&gt;orte-clean - 13 error(s), 0 warning(s)<BR>&gt; &gt; &gt; 10&gt;orterun - 100 error(s), 3 warning(s)<BR>&gt; &gt; &gt; 6&gt;libmpi - 2133 error(s), 42 warning(s)<BR>&gt; &gt; &gt; 12&gt;ompi-server - 27 error(s), 0 warning(s)<BR>&gt; &gt; &gt; 11&gt;ompi_info - 146 error(s), 0 warning(s)<BR>&gt; &gt; &gt; 13&gt;libmpi_cxx - 456 error(s), 61 warning(s)<BR>&gt; &gt; &gt; ========== Rebuild All: 2 succeeded, 12 failed, 0 skipped<BR>&gt; ==========<BR>&gt; &gt; &gt;<BR>&gt; &gt; &gt; It said that 2 succeeded, I could not find the second build<BR>&gt; &gt; success in<BR>&gt; &gt; &gt; the listing.<BR>&gt; &gt; &gt;<BR>&gt; &gt; &gt; *However, everything did compile, and thank you Shiqing !*<BR>&gt; &gt; &gt;<BR>&gt; &gt; &gt; Here is the listing for the first failed link, on "opal-restart":<BR>&gt; &gt; &gt;<BR>&gt; &gt; &gt; 3&gt;------ Rebuild All started: Project: opal-restart, Configuration:<BR>&gt; &gt; &gt; Debug Win32 ------<BR>&gt; &gt; &gt; 3&gt;Deleting intermediate and output files for project<BR>&gt; 'opal-restart',<BR>&gt; &gt; &gt; configuration 'Debug|Win32'<BR>&gt; &gt; &gt; 3&gt;Compiling...<BR>&gt; &gt; &gt; 3&gt;opal-restart.c<BR>&gt; &gt; &gt; 2&gt;Compiling...<BR>&gt; &gt; &gt; 2&gt;snapc_base_select.c<BR>&gt; &gt; &gt; 3&gt;Compiling manifest to resources...<BR>&gt; &gt; &gt; 3&gt;Linking...<BR>&gt; &gt; &gt; 2&gt;snapc_base_open.c<BR>&gt; &gt; &gt; 3&gt;opal-restart.obj : error LNK2001: unresolved external symbol<BR>&gt; &gt; &gt; __imp__opal_crs<BR>&gt; &gt; &gt; 3&gt;opal-restart.obj : error LNK2001: unresolved external symbol<BR>&gt; &gt; &gt; __imp__opal_crs_base_snapshot_t_class<BR>&gt; &gt; &gt; 3&gt;opal-restart.obj : error LNK2001: unresolved external symbol<BR>&gt; &gt; &gt; __imp__opal_crs_base_selected_component<BR>&gt; &gt; &gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol<BR>&gt; &gt; &gt; __imp__opal_crs_base_select referenced in function _main<BR>&gt; &gt; &gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol<BR>&gt; &gt; &gt; __imp__opal_crs_base_open referenced in function _main<BR>&gt; &gt; &gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol<BR>&gt; &gt; &gt; __imp__opal_output_verbose referenced in function _main<BR>&gt; &gt; &gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol<BR>&gt; &gt; &gt; __imp__opal_crs_base_extract_expected_component referenced in<BR>&gt; &gt; function<BR>&gt; &gt; &gt; _main<BR>&gt; &gt; &gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol<BR>&gt; &gt; &gt; __imp__opal_crs_base_get_snapshot_directory referenced in<BR>&gt; &gt; function _main<BR>&gt; &gt; &gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol<BR>&gt; &gt; &gt; __imp__opal_setenv referenced in function _main<BR>&gt; &gt; &gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol<BR>&gt; &gt; &gt; __imp__mca_base_param_env_var referenced in function _main<BR>&gt; &gt; &gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol<BR>&gt; &gt; &gt; __imp__opal_show_help referenced in function _main<BR>&gt; &gt; &gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol<BR>&gt; &gt; &gt; __imp__opal_class_initialize referenced in function "struct<BR>&gt; &gt; &gt; opal_object_t * __cdecl opal_obj_new(struct opal_class_t *)"<BR>&gt; &gt; &gt; (?opal_obj_new@@YAPAUopal_object_t@@PAUopal_class_t@@@Z)<BR>&gt; &gt; &gt; 3&gt;opal-restart.obj : error LNK2001: unresolved external symbol<BR>&gt; &gt; &gt; __imp__opal_cr_is_tool<BR>&gt; &gt; &gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol<BR>&gt; &gt; &gt; __imp__opal_init referenced in function "int __cdecl<BR>&gt; &gt; &gt; initialize(int,char * * const)" (?initialize@@YAHHQAPAD@Z)<BR>&gt; &gt; &gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol<BR>&gt; &gt; &gt; __imp__opal_output_set_verbosity referenced in function "int<BR>&gt; __cdecl<BR>&gt; &gt; &gt; initialize(int,char * * const)" (?initialize@@YAHHQAPAD@Z)<BR>&gt; &gt; &gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol<BR>&gt; &gt; &gt; __imp__opal_output_open referenced in function "int __cdecl<BR>&gt; &gt; &gt; initialize(int,char * * const)" (?initialize@@YAHHQAPAD@Z)<BR>&gt; &gt; &gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol<BR>&gt; &gt; &gt; __imp__opal_init_util referenced in function "int __cdecl<BR>&gt; &gt; &gt; initialize(int,char * * const)" (?initialize@@YAHHQAPAD@Z)<BR>&gt; &gt; &gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol<BR>&gt; &gt; &gt; __imp__opal_finalize referenced in function "int __cdecl<BR>&gt; &gt; &gt; finalize(void)" (?finalize@@YAHXZ)<BR>&gt; &gt; &gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol<BR>&gt; &gt; &gt; __imp__opal_argv_join referenced in function "int __cdecl<BR>&gt; &gt; &gt; parse_args(int,char * * const)" (?parse_args@@YAHHQAPAD@Z)<BR>&gt; &gt; &gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol<BR>&gt; &gt; &gt; __imp__opal_cmd_line_get_tail referenced in function "int __cdecl<BR>&gt; &gt; &gt; parse_args(int,char * * const)" (?parse_args@@YAHHQAPAD@Z)<BR>&gt; &gt; &gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol<BR>&gt; &gt; &gt; __imp__opal_cmd_line_get_usage_msg referenced in function "int<BR>&gt; &gt; __cdecl<BR>&gt; &gt; &gt; parse_args(int,char * * const)" (?parse_args@@YAHHQAPAD@Z)<BR>&gt; &gt; &gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol<BR>&gt; &gt; &gt; __imp__opal_argv_count referenced in function "int __cdecl<BR>&gt; &gt; &gt; parse_args(int,char * * const)" (?parse_args@@YAHHQAPAD@Z)<BR>&gt; &gt; &gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol<BR>&gt; &gt; &gt; __imp__mca_base_cmd_line_process_args referenced in function "int<BR>&gt; &gt; &gt; __cdecl parse_args(int,char * * const)" (?parse_args@@YAHHQAPAD@Z)<BR>&gt; &gt; &gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol<BR>&gt; &gt; &gt; __imp__opal_cmd_line_parse referenced in function "int __cdecl<BR>&gt; &gt; &gt; parse_args(int,char * * const)" (?parse_args@@YAHHQAPAD@Z)<BR>&gt; &gt; &gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol<BR>&gt; &gt; &gt; __imp__mca_base_cmd_line_setup referenced in function "int __cdecl<BR>&gt; &gt; &gt; parse_args(int,char * * const)" (?parse_args@@YAHHQAPAD@Z)<BR>&gt; &gt; &gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol<BR>&gt; &gt; &gt; __imp__mca_base_open referenced in function "int __cdecl<BR>&gt; &gt; &gt; parse_args(int,char * * const)" (?parse_args@@YAHHQAPAD@Z)<BR>&gt; &gt; &gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol<BR>&gt; &gt; &gt; __imp__opal_cmd_line_create referenced in function "int __cdecl<BR>&gt; &gt; &gt; parse_args(int,char * * const)" (?parse_args@@YAHHQAPAD@Z)<BR>&gt; &gt; &gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol<BR>&gt; &gt; &gt; __imp__opal_argv_free referenced in function "int __cdecl<BR>&gt; &gt; &gt; check_file(char *)" (?check_file@@YAHPAD@Z)<BR>&gt; &gt; &gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol<BR>&gt; &gt; &gt; __imp__opal_output referenced in function "int __cdecl<BR>&gt; &gt; check_file(char<BR>&gt; &gt; &gt; *)" (?check_file@@YAHPAD@Z)<BR>&gt; &gt; &gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol<BR>&gt; &gt; &gt; __imp__opal_crs_base_metadata_read_token referenced in function<BR>&gt; "int<BR>&gt; &gt; &gt; __cdecl post_env_vars(int,char *)" (?post_env_vars@@YAHHPAD@Z)<BR>&gt; &gt; &gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol<BR>&gt; &gt; &gt; __imp__opal_asprintf referenced in function "int __cdecl<BR>&gt; &gt; &gt; post_env_vars(int,char *)" (?post_env_vars@@YAHHPAD@Z)<BR>&gt; &gt; &gt; 3&gt;C:\prog\mon\Debug\opal-restart.exe : fatal error LNK1120: 31<BR>&gt; &gt; &gt; unresolved externals<BR>&gt; &gt; &gt; 3&gt;Build log was saved at<BR>&gt; &gt; &gt;<BR>&gt; "<A href="file:///c:/prog/mon/opal/tools/opal-restart/opal-restart.dir/Debug/BuildLog.htm" target=_blank>file://c:\prog\mon\opal\tools\opal-restart\opal-restart.dir\Debug\BuildLog.htm</A><BR>&gt; &lt;<A href="file:///c:/prog/mon/opal/tools/opal-restart/opal-restart.dir/Debug/BuildLog.htm" target=_blank>file:///c:/prog/mon/opal/tools/opal-restart/opal-restart.dir/Debug/BuildLog.htm</A>&gt;<BR>&gt; &gt; &lt;<A href="file:///c:%255Cprog%255Cmon%255Copal%255Ctools%255Copal-restart%255Copal-restart.dir%255CDebug%255CBuildLog.htm" target=_blank>file://c:%5Cprog%5Cmon%5Copal%5Ctools%5Copal-restart%5Copal-restart.dir%5CDebug%5CBuildLog.htm</A><BR>&gt; &lt;<A href="file:///c:%255Cprog%255Cmon%255Copal%255Ctools%255Copal-restart%255Copal-restart.dir%255CDebug%255CBuildLog.htm" target=_blank>file:///c:%255Cprog%255Cmon%255Copal%255Ctools%255Copal-restart%255Copal-restart.dir%255CDebug%255CBuildLog.htm</A>&gt;&gt;"<BR>&gt; &gt; &gt; 3&gt;opal-restart - 32 error(s), 0 warning(s)<BR>&gt; &gt; &gt;<BR>&gt; &gt; &gt; Now, these link errors may be from missing networking software and<BR>&gt; &gt; &gt; hardware, I was just following the instructions in<BR>&gt; &gt; &gt; openmpi-1.4.tar.gz:a/openmpi-1.4/README.WINDOWS:<BR>&gt; &gt; &gt;<BR>&gt; &gt; &gt; &gt; First approach: Using CMake<BR>&gt; &gt; &gt; &gt;<BR>&gt; &gt; &gt; &gt; NOTE: CMake support is available in the Open MPI development<BR>&gt; &gt; &gt; &gt; trunk and 1.3.3 release.<BR>&gt; &gt; &gt; &gt;<BR>&gt; &gt; &gt; &gt; 1. Download the latest version of CMake (at least v2.4).<BR>&gt; &gt; &gt; &gt;<BR>&gt; &gt; &gt; &gt; 2. In the CMake GUI, add the source path and build path of<BR>&gt; Open MPI<BR>&gt; &gt; &gt; &gt; (out of source build is recommended).<BR>&gt; &gt; &gt; &gt;<BR>&gt; &gt; &gt; &gt; 3. Then configure, and after the first time configuration, all<BR>&gt; &gt; &gt; &gt; available options will show up in the CMake GUI. Select the<BR>&gt; &gt; &gt; &gt; options that you require.<BR>&gt; &gt; &gt; &gt;<BR>&gt; &gt; &gt; &gt; 4. Run configure again to generate all Windows solution<BR>&gt; files; they<BR>&gt; &gt; &gt; &gt; will be generated in build path.<BR>&gt; &gt; &gt; &gt;<BR>&gt; &gt; &gt; &gt; 5. Go to the build directory, open the generated Windows solution<BR>&gt; &gt; &gt; &gt; file, and compile.<BR>&gt; &gt; &gt; &gt;<BR>&gt; &gt; &gt; &gt; 6. To generate a installer, you should install NSIS, and<BR>&gt; build the<BR>&gt; &gt; &gt; &gt; 'PACKAGE' project in the Open MPI sulotion.<BR>&gt; &gt; &gt; &gt;<BR>&gt; &gt; &gt;<BR>&gt; &gt; &gt; These instructions did not mention any link libraries I had to<BR>&gt; &gt; add to<BR>&gt; &gt; &gt; complete the build.<BR>&gt; &gt; &gt;<BR>&gt; &gt; &gt; Thanks in advance for any help !<BR>&gt; &gt; &gt;<BR>&gt; &gt; &gt; Charlie ...<BR>&gt; &gt; &gt;<BR>&gt; &gt; &gt;<BR>&gt; ------------------------------------------------------------------------<BR>&gt; &gt; &gt;<BR>&gt; &gt; &gt; _______________________________________________<BR>&gt; &gt; &gt; users mailing list<BR>&gt; &gt; &gt; users@open-mpi.org<BR>&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users" target=_blank>http://www.open-mpi.org/mailman/listinfo.cgi/users</a><BR>&gt; &gt;<BR>&gt; &gt;<BR>&gt; &gt; --<BR>&gt; &gt; --------------------------------------------------------------<BR>&gt; &gt; Shiqing Fan <a href="http://www.hlrs.de/people/fan" target=_blank>http://www.hlrs.de/people/fan</a><BR>&gt; &gt; High Performance Computing Tel.: +49 711 685 87234<BR>&gt; &gt; Center Stuttgart (HLRS) Fax.: +49 711 685 65832<BR>&gt; &gt; Address:Allmandring 30 email: fan@hlrs.de<BR>&gt; &gt; 70569 Stuttgart<BR>&gt; &gt;<BR>&gt;<BR>&gt;<BR>&gt; -- <BR>&gt; --------------------------------------------------------------<BR>&gt; Shiqing Fan <a href="http://www.hlrs.de/people/fan" target=_blank>http://www.hlrs.de/people/fan</a><BR>&gt; High Performance Computing Tel.: +49 711 685 87234<BR>&gt; Center Stuttgart (HLRS) Fax.: +49 711 685 65832<BR>&gt; Address:Allmandring 30 email: fan@hlrs.de<BR>&gt; 70569 Stuttgart<BR>&gt;<BR><BR><BR>-- <BR>--------------------------------------------------------------<BR>Shiqing Fan <a href="http://www.hlrs.de/people/fan" target=_blank>http://www.hlrs.de/people/fan</a><BR>High Performance Computing Tel.: +49 711 685 87234<BR>Center Stuttgart (HLRS) Fax.: +49 711 685 65832<BR>Address:Allmandring 30 email: fan@hlrs.de <BR>70569 Stuttgart<BR><BR></DIV></BLOCKQUOTE></span></body>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11861.php">Andreea Costea: "Re: [OMPI users] Checkpoint/Restart error"</a>
<li><strong>Previous message:</strong> <a href="11859.php">Shiqing Fan: "Re: [OMPI users] Windows CMake build problems ... (cont.)"</a>
<li><strong>Maybe in reply to:</strong> <a href="11762.php">cjohnson_at_[hidden]: "[OMPI users] Windows CMake build problems ... (cont.)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11865.php">Jeff Squyres: "Re: [OMPI users] Windows CMake build problems ... (cont.)"</a>
<li><strong>Reply:</strong> <a href="11865.php">Jeff Squyres: "Re: [OMPI users] Windows CMake build problems ... (cont.)"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>