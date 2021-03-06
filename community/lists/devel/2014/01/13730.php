<?
$subject_val = "Re: [OMPI devel] 1.7.4rc2r30168 - PGI F08 failure";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 10 18:56:36 2014" -->
<!-- isoreceived="20140110235636" -->
<!-- sent="Fri, 10 Jan 2014 23:56:34 +0000" -->
<!-- isosent="20140110235634" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.4rc2r30168 - PGI F08 failure" -->
<!-- id="5776A806-0E8B-4278-BFC6-F43E26A2D4DC_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA148M7yewQFZdDtGrzm+Zhtw9rLCgt2n0Zutfa0ToVbH1w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.7.4rc2r30168 - PGI F08 failure<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-10 18:56:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13731.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30168 - PGI F08 failure"</a>
<li><strong>Previous message:</strong> <a href="13729.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30168 - PGI F08 failure"</a>
<li><strong>In reply to:</strong> <a href="13729.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30168 - PGI F08 failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13731.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30168 - PGI F08 failure"</a>
<li><strong>Reply:</strong> <a href="13731.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30168 - PGI F08 failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 10, 2014, at 6:45 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Keep in mind that I have no specific reason to think pgi-10 should be accepted for building mpi_f08.
</span><br>
<span class="quotelev1">&gt; My only observation was that it seemed to be rejected w/ less configure testing than was applied to accept 8.0 and 9.0.
</span><br>
<p>Got it.
<br>
<p>I see the reason, and it's weird.
<br>
<p>PGI 8 and 9 support Fortran IGNORE TKR syntax, and it looks like PGI 10 does not.  Truly odd.
<br>
<p>Do you have the PGI 11 compiler?  I thought someone said earlier that mpi_f08 worked with their PGI 11 compiler (which means that ignore TKR came back in PGI 11 -- maybe it was just a bug in your rev of PGI 10?).
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13731.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30168 - PGI F08 failure"</a>
<li><strong>Previous message:</strong> <a href="13729.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30168 - PGI F08 failure"</a>
<li><strong>In reply to:</strong> <a href="13729.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30168 - PGI F08 failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13731.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30168 - PGI F08 failure"</a>
<li><strong>Reply:</strong> <a href="13731.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30168 - PGI F08 failure"</a>
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
