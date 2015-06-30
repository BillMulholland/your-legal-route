<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>    
    <title>ARForms PDFcreator</title>
    <preview>images/template1.png</preview>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="<?php echo ARF_PDFCREATOR_URL.'/css/arformspdfcreator.css';?>" type="text/css" />
</head>
    <body>
       <div class="arf_pdf_container">    	
            <div class="arf_field_values">
            	<table class="form-table">
                [ARF_LOOP]
                    <tr class="arf_pdf_viewentry_row {ARF_IF [VAR MOD 2==0]} two_row_even {/ARF_IF} {ARF_IF [VAR MOD 2==1]} two_row_odd {/ARF_IF}">
                        <td class="arf_pdf_viewentry_left">&nbsp;[ARF_GetLabel:VAR]</td>
                        <td class="arf_pdf_viewentry_right">&nbsp;[ARF_GetValue:VAR]</td>
                    </tr>
                [/ARF_LOOP]
                </table>
            </div>
        </div>
        
        [ARF_Signature]Powered by ARForms[/ARF_Signature]
        
    </body>
</html>