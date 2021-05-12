var today = new Date();
var dataHoje = String(today.getDate()).padStart(2, '0')+'/'+(String(today.getMonth()+1)).padStart(2, '0')+'/'+today.getFullYear();

function publicar(){
  var card = '';
  $.ajax({
    url: "/agente/comunidade/publicar",
    data: {
      "_token" : $('meta[name="csrf-token"]').attr('content'),
      "publicacao" : $('#publicacao').val()
    },
    method: 'POST',
    dataType: "json",
    beforeSend: function(){
      $('#card-load').attr('hidden', false);
    },
    success: function(data){
      var dataFormatada = data.data.replace(/(\d*)-(\d*)-(\d*).*/, '$3/$2/$1');
      card += '<div class="card">'+
                '<div class="card-header">'+
                  '<div class="row">'+
                    '<div class="col col-lg-6">'+
                      '<a href="">'+data.nome+'</a>'+
                      '<br>'+
                      '<sup>'+dataFormatada+'</sup>'+
                    '</div>'+
                    '<div class="col col-lg-6 text-right">'+
                      '<a href="" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="Preferencias"><i class="fas fa-ellipsis-v"></i></a>'+
                      '<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">'+
                        '<a class="dropdown-item" href="#">Denunciar</a>'+
                      '</div>'+
                    '</div>'+
                  '</div>'+
                '</div>'+
                '<div class="card-body">'+
                  '<p class="mt-2">'+data.publicacao+'</p>'+
                  '<hr>'+
                  '<p><small>Comentários</small></p>'+
                  '<div class="row">'+
                    '<div class="col-lg-10">'+
                      '<input type="text" name="comentario" id="comentario'+data.id+'" class="form-control" placeholder="Comente algo sobre essa publicação">'+
                    '</div>'+
                    '<div class="col-lg-2">'+
                      '<a href="javascript:void(0)" onclick="comentar('+data.id+')" class="btn btn-ligth ml--4" title="Postar comentario"><i class="fas fa-share-square"></i></a>'+
                    '</div>'+
                  '</div>'+
                  '<div class="alert alert-secondary mt-4" id="loading-coment'+data.id+'" hidden="true">'+
                    '<img src="../site/images/loading.gif" style="display: block;margin-left: auto;margin-right: auto; width: 50px; height: 50px;" id="loading">'+
                  '</div>'+
                  '<div id="comments'+data.id+'"></div>'+
                '</div>'+
              '</div>';
      $('#publicacao').val('')
      $('#card-load').attr('hidden', true);
      $('#div-cards').prepend(card);
    },
    error: function(data){
      console.log(data);
    }
  });
  $('#valor').val('');
}

function comentar(id){
  $.ajax({
    url: "/agente/comunidade/comentar",
    data: {
      "_token" : $('meta[name="csrf-token"]').attr('content'),
      "comentario": $('#comentario'+id).val(),
      "publicacao": id
    },
    method: 'post',
    dataType: "json",
    beforeSend: function(){
      $('#loading-coment'+id).attr('hidden', false);
    },
    success: function(data){
      var comentario = '';
      var dataFormatada = data.data.replace(/(\d*)-(\d*)-(\d*).*/, '$3/$2/$1');
          comentario = '<div class="alert alert-secondary mt-4">'+
                          '<a href="" class="">'+data.usuario['nome']+'</a>  <sup>'+dataFormatada+'</sup> <br>'+
                          '<p class="mt-2">'+data.comentario+'</p>'+
                        '</div>';
      $('#comments'+id).prepend(comentario);
      $('#comentario'+id).val('')
      $('#loading-coment'+id).attr('hidden', true);
    },
    error: function error(data){
      console.log(data);
    }
  });

}

function excluirMovimentacao(id, row){
  $.ajax({
    url: "/agente/comissao/delete/"+id,
    data: {
      "_token" : $('meta[name="csrf-token"]').attr('content'),
    },
    method: 'delete',
    dataType: "json",
    success: function(data){
      var tr = $(row).closest('tr');
      tr.fadeOut(400, function() {tr.remove();});
    },
    error: function error(data){
      console.log(data);
    }
  });
}

function infosComissao(mesReferencia) {
  $.ajax({
    url: "/agente/comissao/procurar/mes",
    data: {
      "_token" : $('meta[name="csrf-token"]').attr('content'),
      "mes" : mesReferencia
    },
    method: 'POST',
    dataType: "json",
    beforeSend: function(){
      $('#loadingDet').attr('hidden', false);
    },
    success: function(data){
      var tableDetails = '';
      $.each(data, function(i, obj){
        var dataFormatada = obj.data.replace(/(\d*)-(\d*)-(\d*).*/, '$3/$2/$1');
        tableDetails += '<tr> <td>'+dataFormatada+'</td> <td>'+obj.categoria+
                '</td> <td> R$ '+parseFloat(obj.valor).toFixed(2).replace('.', ',')+
                '</td> </tr>';
      });
      $('#loadingDet').attr('hidden', true);
      $('#tableDetails').attr('hidden', false);
      $('#details').html(tableDetails).show();
    },
    error: function(data){
      console.log(data);
    }
  });  
}
