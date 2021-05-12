var today = new Date();
var dataHoje = String(today.getDate()).padStart(2, '0')+'/'+(String(today.getMonth()+1)).padStart(2, '0')+'/'+today.getFullYear();
var table;
$.ajax({
  url: "/agente/comissao/mostrar",
  method: 'GET',
  dataType: "json",
  success: function(data){
    $.each(data, function(i, obj){
      table += '<tr> <td>'+obj.data+'</td> <td>'+obj.categoria+
              '</td> <td> R$ '+parseFloat(obj.valor).toFixed(2).replace('.', ',')+
              '</td> <td> <a class="btn btn-danger btn-sm" href="javascript:void(0)" onclick="excluirMovimentacao('+obj.id+', this)" title="Excluir Movimentação"><i class="fas fa-trash"></i></a> </td> </tr>'+
              '<td id="cod" hidden="true">'+obj.id+'</td>';
    });
    $('#loading').attr('hidden', true);
    $('#movimentacao').html(table).show();
  },
  error: function(data){
    console.log(data);
  }
});

$.ajax({
  url: "/agente/comissao/mostrar/mes",
  method: 'GET',
  dataType: "json",
  success: function(data1){
    var chaves = Object.keys(data1);
    var tableMes = '';
    for (i of chaves) {
      tableMes += '<tr> <td>'+i+'</td> <td>'+parseFloat(data1[i]+'.00').toFixed(2).replace('.', ',')+'</td><td><a class="btn btn-info btn-sm" href="javascript:void(0)" onclick="infosComissao(\''+i+'\')" title="Mais informações sobre o mês"><i class="fas fa-plus-square"></i></a><td>';
    }
    $('#loadingMes').attr('hidden', true);
    $('#mesTable').html(tableMes).show();
  },
  error: function(data){
    console.log(data);
  }
});

function moeda(a, e, r, t) {
  let n = ""
    , h = j = 0
    , u = tamanho2 = 0
    , l = ajd2 = ""
    , o = window.Event ? t.which : t.keyCode;
  if (13 == o || 8 == o)
      return !0;
  if (n = String.fromCharCode(o),
  -1 == "0123456789".indexOf(n))
      return !1;
  for (u = a.value.length,
  h = 0; h < u && ("0" == a.value.charAt(h) || a.value.charAt(h) == r); h++)
      ;
  for (l = ""; h < u; h++)
      -1 != "0123456789".indexOf(a.value.charAt(h)) && (l += a.value.charAt(h));
  if (l += n,
  0 == (u = l.length) && (a.value = ""),
  1 == u && (a.value = "0" + r + "0" + l),
  2 == u && (a.value = "0" + r + l),
  u > 2) {
      for (ajd2 = "",
      j = 0,
      h = u - 3; h >= 0; h--)
          3 == j && (ajd2 += e,
          j = 0),
          ajd2 += l.charAt(h),
          j++;
      for (a.value = "",
      tamanho2 = ajd2.length,
      h = tamanho2 - 1; h >= 0; h--)
          a.value += ajd2.charAt(h);
      a.value += r + l.substr(u - 2, u)
  }
  return !1
}

function inserirTable(){
  var table;
  $.ajax({
    url: "/agente/comissao/store",
    data: {
      "_token" : $('meta[name="csrf-token"]').attr('content'),
      "valor" : $('#valor').val(),
      "categoria" : $('#categoria').val(),
      "data" : dataHoje
    },
    method: 'POST',
    dataType: "json",
    success: function(data){
      var dataFormatada = data.data.replace(/(\d*)-(\d*)-(\d*).*/, '$3/$2/$1');
      table += '<tr id='+data.id+'> <td>'+dataFormatada+'</td> <td>'+data.categoria+
              '</td> <td> R$ '+parseFloat(data.valor).toFixed(2).replace('.', ',')+
              '</td> <td> <a class="btn btn-danger btn-sm" href="javascript:void(0)" onclick="excluirMovimentacao('+data.id+', this)" title="Excluir Movimentação"><i class="fas fa-trash"></i></a> </td> </tr>';
      $('#movimentacao').append(table);
    },
    error: function(data){
      console.log(data);
    }
  });
  $('#valor').val('');
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
        tableDetails += '<tr> <td>'+dataFormatada+'</td> <td> R$ '+parseFloat(obj.valor).toFixed(2).replace('.', ',')+
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