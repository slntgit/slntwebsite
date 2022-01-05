// JavaScript Document

$(function(){
	   
	  
	$("#export_excel_button").click(function () {
        $("#export_excel_table").btechco_excelexport({
            containerid: "export_excel_table"
           , datatype: $datatype.Table
        });
    });
	
	
	
	});