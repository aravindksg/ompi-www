<?php
$topdir = "../../..";
$title = "MPI_Type_create_f90_real(3) man page (version 3.0.0)";
$meta_desc = "Open MPI v3.0.0 man page: MPI_TYPE_CREATE_F90_REAL(3)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
     <!-- manual page source format generated by PolyglotMan v3.2, -->
<!-- available at http://polyglotman.sourceforge.net/ -->

<body bgcolor='white'>
<a href='#toc'>Table of Contents</a><p>

<p>
<h2><a name='sect0' href='#toc0'>Name</a></h2>
<br>
<pre>MPI_Type_create_f90_real - Returns a bounded MPI real datatype
</pre>
<h2><a name='sect1' href='#toc1'>Syntax</a></h2>

<p>
<h2><a name='sect2' href='#toc2'>C Syntax</a></h2>
<br>
<pre>#include &lt;mpi.h&gt;
int MPI_Type_create_f90_real(int p, int r, MPI_Datatype *newtype)
</pre>
<h2><a name='sect3' href='#toc3'>Fortran Syntax</a></h2>
<br>
<pre>USE MPI
! or the older form: INCLUDE &rsquo;mpif.h&rsquo;
MPI_TYPE_CREATE_F90_REAL (P, R, NEWTYPE, IERROR)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER<tt> </tt>&nbsp;<tt> </tt>&nbsp;P, R, NEWTYPE, IERROR
</pre>
<h2><a name='sect4' href='#toc4'>Fortran 2008 Syntax</a></h2>
<br>
<pre>USE mpi_f08
MPI_Type_create_f90_real(p, r, newtype, ierror)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER, INTENT(IN) :: p, r
<tt> </tt>&nbsp;<tt> </tt>&nbsp;TYPE(MPI_Datatype), INTENT(OUT) :: newtype
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER, OPTIONAL, INTENT(OUT) :: ierror
</pre>
<h2><a name='sect5' href='#toc5'>Input Parameters</a></h2>

<dl>

<dt>p </dt>
<dd>Precision, in decimal digits (integer). </dd>

<dt>r </dt>
<dd>Decimal exponent
range (integer).
<p> </dd>
</dl>

<h2><a name='sect6' href='#toc6'>Output Parameters</a></h2>

<dl>

<dt>newtype </dt>
<dd>New data type (handle). </dd>

<dt>IERROR
</dt>
<dd>Fortran only: Error status (integer).
<p> </dd>
</dl>

<h2><a name='sect7' href='#toc7'>Description</a></h2>
This function provides
a way to declare KIND-parameterized REAL MPI datatypes. The arguments are
interpreted in a similar fashion to the F90 function SELECTED_REAL_KIND.
The parameters <i>p</i> and <i>r</i> must be scalar integers. The argument <i>p</i> represents
the required level of numerical precision, in decimal digits. The <i>r</i> parameter
indicates the range of exponents desired: the returned datatype will have
at least one exponent between +<i>r</i> and -<i>r</i> (inclusive). <p>
Either <i>p</i> or <i>r</i>, but not
both, may be omitted from calls to SELECTED_REAL_KIND. Similarly, either
argument to MPI_Type_create_f90_real may be set to MPI_UNDEFINED.
<p>
<h2><a name='sect8' href='#toc8'>Notes</a></h2>
It
is erroneous to supply values for <i>p</i> and <i>r</i> not supported by the compiler.
<p>
The Fortran function SELECTED_REAL_KIND maps a large number of (<i>p,r</i>) pairs
to a much smaller number of KIND parameters supported by the compiler. KIND
parameters are not specified by the language and are not portable. From
the point of view of the language, variables of the same base type and
KIND parameter are equivalent, even if their KIND parameters were generated
by different (<i>p,r</i>) arguments to SELECTED_REAL_KIND. However, to help facilitate
interoperability in a heterogeneous environment, equivalency is more strictly
defined for datatypes returned by MPI_Type_create_f90_real. Two MPI datatypes,
each generated by this function, will match if and only if they have identical
values for both <i>p</i> and <i>r</i>. <p>
The interaction between the datatypes returned
by this function and the external32 data representation - used by <a href="../man3/MPI_Pack_external.3.php">MPI_Pack_external</a>,
<a href="../man3/MPI_Unpack_external.3.php">MPI_Unpack_external</a> and many MPI_File functions - is subtle. The external32
representation of returned datatypes is as follows. <p>
<br>
<pre><tt> </tt>&nbsp;<tt> </tt>&nbsp;if (p &gt; 33) and/or (r &gt; 4931):
<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;external32 size = n/a (undefined)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;else if (p &gt; 15) and/or (r &gt; 307):
<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;external32 size = 16
<tt> </tt>&nbsp;<tt> </tt>&nbsp;else if (p &gt; 6) and/or (r &gt; 37):
<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;external32 size = 8
<tt> </tt>&nbsp;<tt> </tt>&nbsp;else:
<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;external32 size = 4
</pre><p>
If the external32 representation of a datatype is undefined, so are the
results of using that datatype in operations that require the external32
format. Care should be taken not to use incompatible datatypes indirectly,
e.g., as part of another datatype or through a duplicated datatype, in these
functions. <p>
If a variable is declared specifying a nondefault KIND value
that was not obtained with SELECTED_REAL_KIND (i.e., <i>p</i> and/or <i>r</i> are unknown),
the only way to obtain a matching MPI datatype is to use the functions
<a href="../man3/MPI_Sizeof.3.php">MPI_Sizeof</a> and <a href="../man3/MPI_Type_match_size.3.php">MPI_Type_match_size</a>.
<p>
<h2><a name='sect9' href='#toc9'>Errors</a></h2>
Almost all MPI routines return
an error value; C routines as the value of the function and Fortran routines
in the last argument. C++ functions do not return errors. If the default
error handler is set to MPI::ERRORS_THROW_EXCEPTIONS, then on error the
C++ exception mechanism will be used to throw an MPI::Exception object.
<p>
Before the error value is returned, the current MPI error handler is called.
By default, this error handler aborts the MPI job, except for I/O function
errors. The error handler may be changed with <a href="../man3/MPI_Comm_set_errhandler.3.php">MPI_Comm_set_errhandler</a>; the
predefined error handler MPI_ERRORS_RETURN may be used to cause error values
to be returned. Note that MPI does not guarantee that an MPI program can
continue past an error. <p>
See the MPI man page for a full list of MPI error
codes.
<p>
<h2><a name='sect10' href='#toc10'>See Also</a></h2>
<br>
<pre><a href="../man3/MPI_Pack_external.3.php">MPI_Pack_external</a>
<a href="../man3/MPI_Sizeof.3.php">MPI_Sizeof</a>
<a href="../man3/MPI_Type_match_size.3.php">MPI_Type_match_size</a>
<a href="../man3/MPI_Unpack_external.3.php">MPI_Unpack_external</a>
SELECTED_REAL_KIND

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");