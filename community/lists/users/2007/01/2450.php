<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jan  9 09:53:47 2007" -->
<!-- isoreceived="20070109145347" -->
<!-- sent="Tue, 9 Jan 2007 14:55:29 +0000" -->
<!-- isosent="20070109145529" -->
<!-- name="Michael Marti" -->
<!-- email="m.marti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi / mpirun problem on aix: poll failed with errno=25, opal_event_loop: ompi_evesel-&amp;gt;dispatch() failed." -->
<!-- id="190DBA44-991E-4469-8221-96264E03F9E6_at_cfp.ist.utl.pt" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="5395439B-4BFE-40C9-9F87-8AC9D9834AE3_at_cisco.com" -->
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
<strong>From:</strong> Michael Marti (<em>m.marti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-09 09:55:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2451.php">Ralph H Castain: "Re: [OMPI users] openmpi / mpirun problem on aix: poll failed with errno=25, opal_event_loop: ompi_evesel-&gt;dispatch() failed."</a>
<li><strong>Previous message:</strong> <a href="2449.php">George Bosilca: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>In reply to:</strong> <a href="2411.php">Jeff Squyres: "Re: [OMPI users] openmpi / mpirun problem on aix: poll failed with errno=25, opal_event_loop: ompi_evesel-&gt;dispatch() failed."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2451.php">Ralph H Castain: "Re: [OMPI users] openmpi / mpirun problem on aix: poll failed with errno=25, opal_event_loop: ompi_evesel-&gt;dispatch() failed."</a>
<li><strong>Reply:</strong> <a href="2451.php">Ralph H Castain: "Re: [OMPI users] openmpi / mpirun problem on aix: poll failed with errno=25, opal_event_loop: ompi_evesel-&gt;dispatch() failed."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Jeff for the hint.
<br>
<p>Unfortunately neither openmpi-1.2b3r12956 nor openmpi-1.2b2 compile  
<br>
on aix-5.3/power5. Therefore I was not able to check if the poll  
<br>
issue is gone on these versions. Both (beta2 and beta3) fail for the  
<br>
same reason:
<br>
<p>&quot;pls_poe_module.c&quot;, line 640.2: 1506-204 (S) Unexpected end of file.
<br>
make: 1254-004 The error code from the last command is 1.
<br>
<p>I presume there is a missing bracket or so probably inside some  
<br>
ifdef. As soon as I have a little more time I will have a look into  
<br>
it - any suggestion as to where to start are welcome...
<br>
<p>Thanks again, Michael.
<br>
<p>On Jan 2, 2007, at 3:50 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Yikes - that's not a good error.  :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We don't regularly build / test on AIX, so I don't have much
</span><br>
<span class="quotelev1">&gt; immediate guidance for you.  My best suggestion at this point would
</span><br>
<span class="quotelev1">&gt; be to try the latest 1.2 beta or nightly snapshot.  We did an update
</span><br>
<span class="quotelev1">&gt; of the event engine (the portion of the code that you're seeing the
</span><br>
<span class="quotelev1">&gt; error issue from) that *may* alleviate the problem...?  (I have no
</span><br>
<span class="quotelev1">&gt; idea, actually -- I'm just kinda hoping that the new version of the
</span><br>
<span class="quotelev1">&gt; event engine will fix your problem :-\ )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 27, 2006, at 10:29 AM, Michael Marti wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear All
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am trying to get openmpi-1.1.2 to work on AIX 5.3 / power5.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; :: Compilation seems to have worked with the following sequence:
</span><br>
<span class="quotelev2">&gt;&gt; ====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; setenv OBJECT_MODE 64
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; setenv CC xlc
</span><br>
<span class="quotelev2">&gt;&gt; setenv CXX xlC
</span><br>
<span class="quotelev2">&gt;&gt; setenv F77 xlf
</span><br>
<span class="quotelev2">&gt;&gt; setenv FC xlf90
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; setenv CFLAGS &quot;-qthreaded -O3 -qmaxmem=-1 -qarch=pwr5x -qtune=pwr5 -
</span><br>
<span class="quotelev2">&gt;&gt; q64&quot;
</span><br>
<span class="quotelev2">&gt;&gt; setenv CXXFLAGS &quot;-qthreaded -O3 -qmaxmem=-1 -qarch=pwr5x -
</span><br>
<span class="quotelev2">&gt;&gt; qtune=pwr5 -q64&quot;
</span><br>
<span class="quotelev2">&gt;&gt; setenv FFLAGS &quot;-qthreaded -O3 -qmaxmem=-1 -qarch=pwr5x -qtune=pwr5 -
</span><br>
<span class="quotelev2">&gt;&gt; q64&quot;
</span><br>
<span class="quotelev2">&gt;&gt; setenv FCFLAGS &quot;-qthreaded -O3 -qmaxmem=-1 -qarch=pwr5x -qtune=pwr5
</span><br>
<span class="quotelev2">&gt;&gt; -q64&quot;
</span><br>
<span class="quotelev2">&gt;&gt; setenv LDFLAGS &quot;-Wl,-brtl&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --prefix=/ist/openmpi-1.1.2 \
</span><br>
<span class="quotelev2">&gt;&gt;   --disable-mpi-cxx \
</span><br>
<span class="quotelev2">&gt;&gt;   --disable-mpi-cxx-seek \
</span><br>
<span class="quotelev2">&gt;&gt;   --enable-mpi-threads \
</span><br>
<span class="quotelev2">&gt;&gt;   --enable-progress-threads \
</span><br>
<span class="quotelev2">&gt;&gt;   --enable-static \
</span><br>
<span class="quotelev2">&gt;&gt;   --disable-shared \
</span><br>
<span class="quotelev2">&gt;&gt;   --disable-io-romio
</span><br>
<span class="quotelev2">&gt;&gt; ====================================================================
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; :: After the compilation I ran make check and all 11 tests passed
</span><br>
<span class="quotelev2">&gt;&gt; successfully.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; :: Now I'm trying to run the following command just for test:
</span><br>
<span class="quotelev2">&gt;&gt; # mpirun -hostfile /gpfs/MICHAEL/MPI_hostfiles/mpinodes_b41-
</span><br>
<span class="quotelev2">&gt;&gt; b44_1.asc -np 2 /usr/bin/hostname
</span><br>
<span class="quotelev2">&gt;&gt; - The file /gpfs/MICHAEL/MPI_hostfiles/mpinodes_b41-b44_1.asc
</span><br>
<span class="quotelev2">&gt;&gt; contains 4 hosts:
</span><br>
<span class="quotelev2">&gt;&gt;     r1blade041 slots=1
</span><br>
<span class="quotelev2">&gt;&gt;     r1blade042 slots=1
</span><br>
<span class="quotelev2">&gt;&gt;     r1blade043 slots=1
</span><br>
<span class="quotelev2">&gt;&gt;     r1blade044 slots=1
</span><br>
<span class="quotelev2">&gt;&gt; - The mpirun command eventually hangs with the following message:
</span><br>
<span class="quotelev2">&gt;&gt;     [r1blade041:418014] poll failed with errno=25
</span><br>
<span class="quotelev2">&gt;&gt;     [r1blade041:418014] opal_event_loop: ompi_evesel-&gt;dispatch()
</span><br>
<span class="quotelev2">&gt;&gt; failed.
</span><br>
<span class="quotelev2">&gt;&gt; - In this state mpirun cannot be killed by hitting &lt;ctrl-c&gt; only a
</span><br>
<span class="quotelev2">&gt;&gt; kill -9 will do the trick.
</span><br>
<span class="quotelev2">&gt;&gt; - While the mpirun still hangs I can see that the &quot;orted&quot; has been
</span><br>
<span class="quotelev2">&gt;&gt; launched on both requested hosts.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; :: I turned on all debug options in openmpi-mca-params.conf. The
</span><br>
<span class="quotelev2">&gt;&gt; output for the same call of mpirun is in the file mpirun- 
</span><br>
<span class="quotelev2">&gt;&gt; debug.txt.gz.
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mpirun-debug.txt.gz&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; :: As sugested in the mailinglis rules I include config.log
</span><br>
<span class="quotelev2">&gt;&gt; (config.log.gz) and the output of ompi_info (ompi_info.txt.gz).
</span><br>
<span class="quotelev2">&gt;&gt; &lt;config.log.gz&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;ompi_info.txt.gz&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; :: As I am completely new to openmpi (I have some experience with
</span><br>
<span class="quotelev2">&gt;&gt; lam) I am lost at this stage. I would really appreciate if someone
</span><br>
<span class="quotelev2">&gt;&gt; could give me some hints as to what is going wrong and where I
</span><br>
<span class="quotelev2">&gt;&gt; could get more info.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best regards,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Michael Marti.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; ------
</span><br>
<span class="quotelev2">&gt;&gt; Michael Marti
</span><br>
<span class="quotelev2">&gt;&gt; Centro de Fisica dos Plasmas
</span><br>
<span class="quotelev2">&gt;&gt; Instituto Superior Tecnico
</span><br>
<span class="quotelev2">&gt;&gt; Av. Rovisco Pais
</span><br>
<span class="quotelev2">&gt;&gt; 1049-001 Lisboa
</span><br>
<span class="quotelev2">&gt;&gt; Portugal
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Tel:       +351 218 419 379
</span><br>
<span class="quotelev2">&gt;&gt; Fax:      +351 218 464 455
</span><br>
<span class="quotelev2">&gt;&gt; Mobile:  +351 968 434 327
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; ------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Server Virtualization Business Unit
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2451.php">Ralph H Castain: "Re: [OMPI users] openmpi / mpirun problem on aix: poll failed with errno=25, opal_event_loop: ompi_evesel-&gt;dispatch() failed."</a>
<li><strong>Previous message:</strong> <a href="2449.php">George Bosilca: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>In reply to:</strong> <a href="2411.php">Jeff Squyres: "Re: [OMPI users] openmpi / mpirun problem on aix: poll failed with errno=25, opal_event_loop: ompi_evesel-&gt;dispatch() failed."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2451.php">Ralph H Castain: "Re: [OMPI users] openmpi / mpirun problem on aix: poll failed with errno=25, opal_event_loop: ompi_evesel-&gt;dispatch() failed."</a>
<li><strong>Reply:</strong> <a href="2451.php">Ralph H Castain: "Re: [OMPI users] openmpi / mpirun problem on aix: poll failed with errno=25, opal_event_loop: ompi_evesel-&gt;dispatch() failed."</a>
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
