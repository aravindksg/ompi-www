<?php
$topdir = "../../..";
$title = "MPI_T_pvar_get_info(3) man page (version 3.0.0)";
$meta_desc = "Open MPI v3.0.0 man page: MPI_T_PVAR_GET_INFO(3)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
      <!-- manual page source format generated by PolyglotMan v3.2, -->
<!-- available at http://polyglotman.sourceforge.net/ -->

<body bgcolor='white'>
<a href='#toc'>Table of Contents</a><p>

<h2><a name='sect0' href='#toc0'>Name</a></h2>
<b>MPI_T_pvar_get_info</b> - Query information from a performance variable

<h2><a name='sect1' href='#toc1'>Syntax</a></h2>

<h2><a name='sect2' href='#toc2'>C Syntax</a></h2>
<br>
<pre>#include &lt;mpi.h&gt;
int MPI_T_pvar_get_info(int pvar_index, char *name, int *name_len,
                        int *verbosity, int *var_class, MPI_Datatype *datatype,
MPI_T_enum *enumtype,
                        char *desc, int *desc_len, int *bind, int *readonly,
int *continuous,
                        int *atomic)
</pre>
<h2><a name='sect3' href='#toc3'>Input Parameters</a></h2>

<dl>

<dt>pvar_index </dt>
<dd>Index of the performance variable to be queried.

<p> </dd>
</dl>

<h2><a name='sect4' href='#toc4'>Input/Output Parameters</a></h2>

<dl>

<dt>name_len </dt>
<dd>Length of the string and/or buffer for
name. </dd>

<dt>desc_len </dt>
<dd>Length of the string and/or buffer for desc.
<p> </dd>
</dl>

<h2><a name='sect5' href='#toc5'>Output Parameters</a></h2>

<dl>

<dt>name
</dt>
<dd>Buffer to return the string containing the name of the performance variable.
</dd>

<dt>verbosity </dt>
<dd>Verbosity level of this variable. </dd>

<dt>var_class </dt>
<dd>Class of performance
variable. </dd>

<dt>datatype </dt>
<dd>MPI datatype of the information stored in the performance
variable. </dd>

<dt>enumtype </dt>
<dd>Optional descriptor for enumeration information. </dd>

<dt>desc
</dt>
<dd>Buffer to return the string containing the description of the performance
variable. </dd>

<dt>bind </dt>
<dd>Type of MPI object to which this variable must be bound. </dd>

<dt>readonly
</dt>
<dd>Flag indicating whether the variable can be written/reset. </dd>

<dt>continuous </dt>
<dd>Flag
indicating whether the variable can be started and stopped or is continuously
active. </dd>

<dt>atomic </dt>
<dd>Flag indicating whether the variable can be atomically read
and reset.   </dd>
</dl>

<h2><a name='sect6' href='#toc6'>Description</a></h2>
MPI_T_pvar_get_info can be used to query information
from a performance variable. The function returns the verbosity, class,
datatype, enumeration type, and binding of the queried control variable
in the arguments <i>verbosity</i>, <i>var_class</i>, <i>datatype</i>, <i>enumtype</i>, and <i>bind</i> respectively.
Flags indicating whether the variable is read-only, continuous, or atomic
are returns in <i>readonly</i>, <i>continuous</i>, and <i>atomic</i> accordingly. See MPI-3 �&sect;
14.3.7 for more information. See the man page for <a href="../man3/MPI_T_cvar_get_info.3.php">MPI_T_cvar_get_info</a> for
information on variable verbosity.
<p>
<h2><a name='sect7' href='#toc7'>Variable Class</a></h2>
Performance variables
are categorized into classes which describe their initial value, valid
types, and behavior. The class returned in the <i>var_class</i> parameter may be
one of the following:
<dl>

<dt>MPI_T_PVAR_CLASS_STATE </dt>
<dd>Variable represents a set
of discrete states that may be described by an enumerator. Variables of
this class must be represented by an MPI_INT. The starting value is the
current state of the variable. </dd>

<dt>MPI_T_PVAR_CLASS_LEVEL </dt>
<dd>Variable represents
the current utilization level of a resource. Variables of this class must
be represented by an MPI_UNSIGNED, MPI_UNSIGNED_LONG, MPI_UNSIGNED_LONG_LONG,
or MPI_DOUBLE. The starting value is the current utilization level of the
resource. </dd>

<dt>MPI_T_PVAR_CLASS_SIZE </dt>
<dd>Variable represents the fixed size of a
resource. Variables of this class are represented by an MPI_UNSIGNED, MPI_UNSIGNED_LONG,
MPI_UNSIGNED_LONG_LONG, or MPI_DOUBLE. The starting value is the current
size of the resource. </dd>

<dt>MPI_T_PVAR_CLASS_PERCENTAGE </dt>
<dd>Variable represents the
current precentage utilization level of a resource. Variables of this class
are represented by an MPI_DOUBLE. The starting value is the current percentage
utilization of the resource. </dd>

<dt>MPI_T_PVAR_CLASS_HIGHWATERMARK </dt>
<dd>Variable represents
the high watermark of the utilization of a resource. Variables of this class
are represented by an MPI_UNSIGNED, MPI_UNSIGNED_LONG, MPI_UNSIGNED_LONG_LONG,
or MPI_DOUBLE. The starting value is the current utilization of the resource.
</dd>

<dt>MPI_T_PVAR_CLASS_HIGHWATERMARK </dt>
<dd>Variable represents the low watermark of
the utilization of a resource. Variables of this class are represented by
an MPI_UNSIGNED, MPI_UNSIGNED_LONG, MPI_UNSIGNED_LONG_LONG, or MPI_DOUBLE.
The starting value is the current utilization of the resource. </dd>

<dt>MPI_T_PVAR_CLASS_COUNTER
</dt>
<dd>Variable represents a count of the number of occurrences of a specific
event. Variables of this class are represented by an MPI_UNSIGNED, MPI_UNSIGNED_LONG,
or MPI_UNSIGNED_LONG_LONG. The starting value is 0. </dd>

<dt>MPI_T_PVAR_CLASS_COUNTER
</dt>
<dd>Variable represents an aggregated value that represents a sum of arguments
processed during a specific event. Variables of this class are represented
by an MPI_UNSIGNED, MPI_UNSIGNED_LONG, MPI_UNSIGNED_LONG_LONG, or MPI_DOUBLE.
The starting value is 0. </dd>

<dt>MPI_T_PVAR_CLASS_TIMER </dt>
<dd>Variable represents the
aggregated time spent by the MPI implementation while processing an event,
type of event, or section of code. Variables of this class are represented
by an MPI_UNSIGNED, MPI_UNSIGNED_LONG, MPI_UNSIGNED_LONG_LONG, or MPI_DOUBLE.
If the variable is represented by an MPI_DOUBLE the units will be the same
as those used by <a href="../man3/MPI_Wtime.3.php">MPI_Wtime</a>(). The starting value is 0. </dd>

<dt>MPI_T_PVAR_CLASS_GENERIC
</dt>
<dd>Variable does not fit into any other class. Can by represented by an type
supported by the MPI tool information interface (see DATATYPE). Starting
value is variable specific.
<p> For more information see MPI-3 [char 167] 14.3.7.

<p> </dd>
</dl>

<h2><a name='sect8' href='#toc8'>Datatype</a></h2>
The datatype returned by MPI_T_pvar_get_info is restricted to
one of the following datatypes: MPI_INT, MPI_UNSIGNED, MPI_UNSIGNED_LONG,
MPI_UNSIGNED_LONG_LONG, MPI_COUNT, MPI_CHAR, and MPI_DOUBLE. For more information
on datatypes in the MPI Tool information interface see MPI-3 [char167] 14.3.5.

<p>
<h2><a name='sect9' href='#toc9'>Binding</a></h2>
Performance variables may be bound to an MPI object. The binding
returned in the <i>bind</i> parameter may be one of the following:
<dl>

<dt>MPI_T_BIND_NO_OBJECT
</dt>
<dd>No object </dd>

<dt>MPI_T_BIND_MPI_COMM </dt>
<dd>MPI communicator </dd>

<dt>MPI_T_BIND_MPI_DATATYPE
</dt>
<dd>MPI datatype </dd>

<dt>MPI_T_BIND_MPI_ERRHANDLER </dt>
<dd>MPI error handler </dd>

<dt>MPI_T_BIND_MPI_FILE
</dt>
<dd>MPI file handle </dd>

<dt>MPI_T_BIND_MPI_GROUP </dt>
<dd>MPI group </dd>

<dt>MPI_T_BIND_MPI_OP </dt>
<dd>MPI reduction
operator </dd>

<dt>MPI_T_BIND_MPI_REQUEST </dt>
<dd>MPI request </dd>

<dt>MPI_T_BIND_MPI_WIN </dt>
<dd>MPI window
for one-sided communication </dd>

<dt>MPI_T_BIND_MPI_MESSAGE </dt>
<dd>MPI message object </dd>

<dt>MPI_T_BIND_MPI_INFO
</dt>
<dd>
<p>MPI info object
<p> For more information see MPI-3 [char167] 14.3.2.
<p> </dd>
</dl>

<h2><a name='sect10' href='#toc10'>Notes</a></h2>
This
MPI tool interface function returns two strings. This function takes two
argument for each string: a buffer to store the string, and a length which
must initially specify the size of the buffer. If the length passed is n
then this function will copy at most n - 1 characters of the string into
the corresponding buffer and set the length to the number of characters
copied - 1. If the length argument is NULL or the value specified in the
length is 0 the corresponding string buffer is ignored and the string is
not returned. For more information see MPI-3 [char167] 14.3.3.
<p>
<h2><a name='sect11' href='#toc11'>Errors</a></h2>
MPI_T_pvar_get_info()
will fail if:
<dl>

<dt>[MPI_T_ERR_NOT_INITIALIZED] </dt>
<dd>The MPI Tools interface not initialized
</dd>

<dt>[MPI_T_ERR_INVALID_INDEX] </dt>
<dd>The performance variable index is invalid  </dd>
</dl>

<h2><a name='sect12' href='#toc12'>See
Also</a></h2>
<br>
<pre><a href="../man3/MPI_T_cvar_get_info.3.php">MPI_T_cvar_get_info</a>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");