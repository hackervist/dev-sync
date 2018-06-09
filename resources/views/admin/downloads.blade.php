@extends ('layouts.master')

@section('title')
	<title>Downloads</title>
@endsection




@section('content')

	<ol class='breadcrumb'>
		<li><a href='/admin'>Home</a></li> ->>
		<li><a href='/admin'>Admin Dashboard</a></li> ->>
		<li class='active'>Downloads</li>
	</ol>


	<h1>Downloads</h1>

	
	<h3>Assessment 1</h3>
	
		<p>	<a href="downFiles/Assessment_1.docx" download="
			208324071_Assessment_1.docx">Assement 1</a>
		</p>	

	<h3>Erd</h3>
	<p>
			<a href="downFiles/ERD.docx" download="208324071_ERD.docx">ERD</a>
	</p>


	<h3>Assesment 3</h3>
	
		<p>	<a href="downFiles/Assmt3_Form design.docx" download="
			208324071_Assmnt3_formDeisn.docx">Assement 3(Form design)</a>
		</p>	
			
	<h3>Proposal</h3>
		<p>
			<a href="downFiles/proposal.docx" download="208324071_proposal.docx">Proposal</a>
		</p>

	<h3>Dev-sync Document</h3>
		<p>
			<a href="downFiles/devSync.docx" download="208324071_dev-syncAll.docx">Dev_sync DOcumentation</a>
		</p>

		<h3>Assessment 4</h3>
		<p>
			<a href="downFiles/Assmt4.docx" download="208324071_assmt4_rubic.docx">Assessment 4 Rubic</a>
		</p>

		<h3>Report Template</h3>
		<p>
			<a href="downFiles/Reporttemplate.docx" download="208324071_ReportTemplate.docx">Report template</a>
		</p>


		<h2>Visio format - improve</h2>
		<p>
			<a href="downFiles/ERD.vsdx" download="208324071_proposal.docx">ERD</a>
		</p>
		<p>
			<a href="downFiles/Use_case.vsdx" download="208324071_proposal.docx">USe Case</a>
		</p>



<br><br><br>
@endsection