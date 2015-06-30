<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>    
    <title>ARForms PDFcreator</title>
    <preview>images/template2.png</preview>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="<?php echo ARF_PDFCREATOR_URL.'/css/arformspdfcreator.css';?>" type="text/css" />
</head>
    <body>
        <div class="arf_pdf_container">
            <div class="arf_field_values">
                [ARF_LOOP]
                    <div class="two_row_arfviewentry_row {ARF_IF [VAR MOD 2==0]} two_row_even {/ARF_IF} {ARF_IF [VAR MOD 2==1]} two_row_odd {/ARF_IF}">
                        <div class="two_row_arfviewentry_left">&nbsp;[ARF_GetLabel:VAR]</div>
                        <div class="two_row_arfviewentry_right">&nbsp;[ARF_GetValue:VAR]</div>
                    </div>
                [/ARF_LOOP]
            </div>
        </div>
        
        [ARF_Signature]Powered by ARForms[/ARF_Signature]
    </body>
</html>