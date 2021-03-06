<?
$subject_val = "Re: [OMPI users] running a ompi 1.4.2 job with -np versus -npernode";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 17 18:25:54 2010" -->
<!-- isoreceived="20100517222554" -->
<!-- sent="Mon, 17 May 2010 16:25:26 -0600" -->
<!-- isosent="20100517222526" -->
<!-- name="Christopher Maestas" -->
<!-- email="cdmaestas_at_[hidden]" -->
<!-- subject="Re: [OMPI users] running a ompi 1.4.2 job with -np versus -npernode" -->
<!-- id="AANLkTik3aUw3b2lrTAGQ9CcpE318yPRvMJ5bNfOU6uJq_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTik1nf-pbtFO5q-8InEAWotjw4X1BWeSWqp06tW8_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] running a ompi 1.4.2 job with -np versus -npernode<br>
<strong>From:</strong> Christopher Maestas (<em>cdmaestas_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-17 18:25:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13068.php">Ralph Castain: "Re: [OMPI users] running a ompi 1.4.2 job with -np versus -npernode"</a>
<li><strong>Previous message:</strong> <a href="13066.php">Ralph Castain: "Re: [OMPI users] running a ompi 1.4.2 job with -np versus -npernode"</a>
<li><strong>In reply to:</strong> <a href="13066.php">Ralph Castain: "Re: [OMPI users] running a ompi 1.4.2 job with -np versus -npernode"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13068.php">Ralph Castain: "Re: [OMPI users] running a ompi 1.4.2 job with -np versus -npernode"</a>
<li><strong>Reply:</strong> <a href="13068.php">Ralph Castain: "Re: [OMPI users] running a ompi 1.4.2 job with -np versus -npernode"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OK.  The -np only run:
<br>
<pre>
---
sh-3.1$ mpirun -np 2 --display-allocation --display-devel-map mpi_hello
======================   ALLOCATED NODES   ======================
 Data for node: Name: cut1n7            Launch id: -1   Arch: ffc91200
 State: 2
        Num boards: 1   Num sockets/board: 2    Num cores/socket: 4
        Daemon: [[51868,0],0]   Daemon launched: True
        Num slots: 1    Slots in use: 0
        Num slots allocated: 1  Max slots: 0
        Username on node: NULL
        Num procs: 0    Next node_rank: 0
 Data for node: Name: cut1n8            Launch id: -1   Arch: 0 State: 2
        Num boards: 1   Num sockets/board: 2    Num cores/socket: 4
        Daemon: Not defined     Daemon launched: False
        Num slots: 0    Slots in use: 0
        Num slots allocated: 0  Max slots: 0
        Username on node: NULL
        Num procs: 0    Next node_rank: 0
=================================================================
 Map generated by mapping policy: 0400
        Npernode: 0     Oversubscribe allowed: TRUE     CPU Lists: FALSE
        Num new daemons: 1      New daemon starting vpid 1
        Num nodes: 2
 Data for node: Name: cut1n7            Launch id: -1   Arch: ffc91200
 State: 2
        Num boards: 1   Num sockets/board: 2    Num cores/socket: 4
        Daemon: [[51868,0],0]   Daemon launched: True
        Num slots: 1    Slots in use: 1
        Num slots allocated: 1  Max slots: 0
        Username on node: NULL
        Num procs: 1    Next node_rank: 1
        Data for proc: [[51868,1],0]
                Pid: 0  Local rank: 0   Node rank: 0
                State: 0        App_context: 0  Slot list: NULL
 Data for node: Name: cut1n8            Launch id: -1   Arch: 0 State: 2
        Num boards: 1   Num sockets/board: 2    Num cores/socket: 4
        Daemon: [[51868,0],1]   Daemon launched: False
        Num slots: 0    Slots in use: 1
        Num slots allocated: 0  Max slots: 0
        Username on node: NULL
        Num procs: 1    Next node_rank: 1
        Data for proc: [[51868,1],1]
                Pid: 0  Local rank: 0   Node rank: 0
                State: 0        App_context: 0  Slot list: NULL
Hello, I am node cut1n8 with rank 1
Hello, I am node cut1n7 with rank 0
---
Before the segfault I got (using -npernode):
---
sh-3.1$ mpirun -npernode 1 --display-allocation --display-devel-map
mpi_hello
======================   ALLOCATED NODES   ======================
 Data for node: Name: cut1n7            Launch id: -1   Arch: ffc91200
 State: 2
        Num boards: 1   Num sockets/board: 2    Num cores/socket: 4
        Daemon: [[51942,0],0]   Daemon launched: True
        Num slots: 1    Slots in use: 0
        Num slots allocated: 1  Max slots: 0
        Username on node: NULL
        Num procs: 0    Next node_rank: 0
 Data for node: Name: cut1n8            Launch id: -1   Arch: 0 State: 2
        Num boards: 1   Num sockets/board: 2    Num cores/socket: 4
        Daemon: Not defined     Daemon launched: False
        Num slots: 0    Slots in use: 0
        Num slots allocated: 0  Max slots: 0
        Username on node: NULL
        Num procs: 0    Next node_rank: 0
=================================================================
 Map generated by mapping policy: 0400
        Npernode: 1     Oversubscribe allowed: TRUE     CPU Lists: FALSE
        Num new daemons: 1      New daemon starting vpid 1
        Num nodes: 2
 Data for node: Name: cut1n7            Launch id: -1   Arch: ffc91200
 State: 2
        Num boards: 1   Num sockets/board: 2    Num cores/socket: 4
        Daemon: [[51942,0],0]   Daemon launched: True
        Num slots: 1    Slots in use: 1
        Num slots allocated: 1  Max slots: 0
        Username on node: NULL
        Num procs: 1    Next node_rank: 1
        Data for proc: [[51942,1],0]
                Pid: 0  Local rank: 0   Node rank: 0
                State: 0        App_context: 0  Slot list: NULL
 Data for node: Name: cut1n8            Launch id: -1   Arch: 0 State: 2
        Num boards: 1   Num sockets/board: 2    Num cores/socket: 4
        Daemon: [[51942,0],1]   Daemon launched: False
        Num slots: 0    Slots in use: 1
        Num slots allocated: 0  Max slots: 0
        Username on node: NULL
        Num procs: 1    Next node_rank: 1
        Data for proc: [[51942,1],0]
                Pid: 0  Local rank: 0   Node rank: 0
                State: 0        App_context: 0  Slot list: NULL
[cut1n7:19375] *** Process received signal ***
[cut1n7:19375] Signal: Segmentation fault (11)
[cut1n7:19375] Signal code: Address not mapped (1)
[cut1n7:19375] Failing at address: 0x50
[cut1n7:19375] [ 0] /lib64/libpthread.so.0 [0x37bda0de80]
[cut1n7:19375] [ 1]
/apps/mpi/openmpi/1.4.2-gcc-4.1.2-may.12.10/lib/libopen-rte.so.0(orte_util_encode_pidmap+0xdb)
[0x2aed0f93af8b]
[cut1n7:19375] [ 2]
/apps/mpi/openmpi/1.4.2-gcc-4.1.2-may.12.10/lib/libopen-rte.so.0(orte_odls_base_default_get_add_procs_data+0x655)
[0x2aed0f9462f5]
[cut1n7:19375] [ 3]
/apps/mpi/openmpi/1.4.2-gcc-4.1.2-may.12.10/lib/libopen-rte.so.0(orte_plm_base_launch_apps+0x10b)
[0x2aed0f94d31b]
[cut1n7:19375] [ 4]
/apps/mpi/openmpi/1.4.2-gcc-4.1.2-may.12.10/lib/openmpi/mca_plm_slurm.so
[0x2aed107f6ecf]
[cut1n7:19375] [ 5] mpirun [0x40335a]
[cut1n7:19375] [ 6] mpirun [0x4029f3]
[cut1n7:19375] [ 7] /lib64/libc.so.6(__libc_start_main+0xf4) [0x37bce1d8b4]
[cut1n7:19375] [ 8] mpirun [0x402929]
[cut1n7:19375] *** End of error message ***
Segmentation fault
---
I'll look into a slurm version update.  Previously, SLURM 1.0.30 and Open
MPI 1.3.2 working together.  Just curious what was giving me heartache here
...
On Mon, May 17, 2010 at 4:06 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
&gt; That's a pretty old version of slurm - I don't have access to anything that
&gt; old to test against. You could try running it with --display-allocation
&gt; --display-devel-map to see what ORTE thinks the allocation is and how it
&gt; mapped the procs. It sounds like something may be having a problem there...
&gt;
&gt;
&gt; On Mon, May 17, 2010 at 11:08 AM, Christopher Maestas &lt;cdmaestas_at_[hidden]
&gt; &gt; wrote:
&gt;
&gt;&gt; Hello,
&gt;&gt;
&gt;&gt; I've been having some troubles with OpenMPI 1.4.X and slurm recently.  I
&gt;&gt; seem to be able to run jobs this way ok:
&gt;&gt; ---
&gt;&gt; sh-3.1$ mpirun -np 2 mpi_hello
&gt;&gt; Hello, I am node cut1n7 with rank 0
&gt;&gt; Hello, I am node cut1n8 with rank 1
&gt;&gt; --
&gt;&gt;
&gt;&gt; However if I try and use the -npernode option I get:
&gt;&gt; ---
&gt;&gt; sh-3.1$ mpirun -npernode 1 mpi_hello
&gt;&gt; [cut1n7:16368] *** Process received signal ***
&gt;&gt; [cut1n7:16368] Signal: Segmentation fault (11)
&gt;&gt; [cut1n7:16368] Signal code: Address not mapped (1)
&gt;&gt; [cut1n7:16368] Failing at address: 0x50
&gt;&gt; [cut1n7:16368] [ 0] /lib64/libpthread.so.0 [0x37bda0de80]
&gt;&gt; [cut1n7:16368] [ 1]
&gt;&gt; /apps/mpi/openmpi/1.4.2-gcc-4.1.2-may.12.10/lib/libopen-rte.so.0(orte_util_encode_pidmap+0xdb)
&gt;&gt; [0x2b73eb84df8b]
&gt;&gt; [cut1n7:16368] [ 2]
&gt;&gt; /apps/mpi/openmpi/1.4.2-gcc-4.1.2-may.12.10/lib/libopen-rte.so.0(orte_odls_base_default_get_add_procs_data+0x655)
&gt;&gt; [0x2b73eb8592f5]
&gt;&gt; [cut1n7:16368] [ 3]
&gt;&gt; /apps/mpi/openmpi/1.4.2-gcc-4.1.2-may.12.10/lib/libopen-rte.so.0(orte_plm_base_launch_apps+0x10b)
&gt;&gt; [0x2b73eb86031b]
&gt;&gt; [cut1n7:16368] [ 4]
&gt;&gt; /apps/mpi/openmpi/1.4.2-gcc-4.1.2-may.12.10/lib/openmpi/mca_plm_slurm.so
&gt;&gt; [0x2b73ec709ecf]
&gt;&gt; [cut1n7:16368] [ 5] mpirun [0x40335a]
&gt;&gt; [cut1n7:16368] [ 6] mpirun [0x4029f3]
&gt;&gt; [cut1n7:16368] [ 7] /lib64/libc.so.6(__libc_start_main+0xf4)
&gt;&gt; [0x37bce1d8b4]
&gt;&gt; [cut1n7:16368] [ 8] mpirun [0x402929]
&gt;&gt; [cut1n7:16368] *** End of error message ***
&gt;&gt; Segmentation fault
&gt;&gt; ---
&gt;&gt;
&gt;&gt; This is ompi 1.4.2, gcc 4.1.1 and slurm 2.0.9 ... I'm sure it's a rather
&gt;&gt; silly detail on my end, but figure I should start this thread for any
&gt;&gt; insights and feedback I can help provide to resolve this.
&gt;&gt;
&gt;&gt; Thanks,
&gt;&gt; -cdm
&gt;&gt;
&gt;&gt; _______________________________________________
&gt;&gt; users mailing list
&gt;&gt; users_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;
&gt;
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13067/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13068.php">Ralph Castain: "Re: [OMPI users] running a ompi 1.4.2 job with -np versus -npernode"</a>
<li><strong>Previous message:</strong> <a href="13066.php">Ralph Castain: "Re: [OMPI users] running a ompi 1.4.2 job with -np versus -npernode"</a>
<li><strong>In reply to:</strong> <a href="13066.php">Ralph Castain: "Re: [OMPI users] running a ompi 1.4.2 job with -np versus -npernode"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13068.php">Ralph Castain: "Re: [OMPI users] running a ompi 1.4.2 job with -np versus -npernode"</a>
<li><strong>Reply:</strong> <a href="13068.php">Ralph Castain: "Re: [OMPI users] running a ompi 1.4.2 job with -np versus -npernode"</a>
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
