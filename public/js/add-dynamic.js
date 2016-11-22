/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function addImage() {
    code = '<div class="col-md-4">' +
            '<div class="fileinput fileinput-new" data-provides="fileinput">' +
            '<div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">' +
            '<img  src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxOTAiIGhlaWdodD0iMTQwIj48cmVjdCB3aWR0aD0iMTkwIiBoZWlnaHQ9IjE0MCIgZmlsbD0iI2VlZSIvPjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9Ijk1IiB5PSI3MCIgc3R5bGU9ImZpbGw6I2FhYTtmb250LXdlaWdodDpib2xkO2ZvbnQtc2l6ZToxMnB4O2ZvbnQtZmFtaWx5OkFyaWFsLEhlbHZldGljYSxzYW5zLXNlcmlmO2RvbWluYW50LWJhc2VsaW5lOmNlbnRyYWwiPjE5MHgxNDA8L3RleHQ+PC9zdmc+" alt="...">' +
            '</div>' +
            ' <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>' +
            '<div>' +
            '<span class="btn btn-default btn-file"><span class="fileinput-new">Selectionnez l&apos;image</span><span class="fileinput-exists">Changer</span><input id="input" type="file" name="resProd[]" class="file" data-show-caption="true"></span>' +
            '<a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Supprimer</a>' +
            '</div>' +
            '</div>' +
            '</div>';
    var imgDiv = $("#tableau_image");
    imgDiv.append(code);
}

function addbloc() {
    code = '<span class="clearfix">&nbsp;</span>' +
            '<span  class="col-md-5"><input type="text" class=" form-control" name="nomAttrib[]" placeholder="nom attribut.."></span>' +
            '<span  class="col-md-4"><input type="text" class=" form-control" name="valeurAttrib[]" placeholder="valeur attribut.."></span>'+
            '<span class="clearfix">&nbsp;</span>';
    var adDiv = $("#tableau_bloc");
    adDiv.append(code);
}