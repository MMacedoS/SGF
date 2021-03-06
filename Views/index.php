<?php
//  $path="http://$_SERVER[HTTP_HOST]";
include "header.php";
$meses = array(
    '1' => 'Janeiro',
    '2' => 'Fevereiro',
    '3' => 'Março',
    '4' => 'Abril',
    '5' => 'Maio',
    '6' => 'Junho',
    '7' => 'Julho',
    '8' => 'Agosto',
    '9' => 'Setembro',
    '10' => 'Outubro',
    '11' => 'Novembro',
    '12' => 'Dezembro'
 );
?>

<div class="col main pt-5 mt-3">
            <h1 class="display-4 d-none d-sm-block">
            Dados
            </h1>
            <p class="lead d-none d-sm-block">Historico</p>

           
            <div class="row mb-3">
                <div class="col-xl-3 col-sm-6 py-2">
                    <div class="card bg-success text-white h-100">
                        <div class="card-body bg-success">
                            <div class="rotate">
                                <i class="fa fa-user fa-4x"></i>
                            </div>
                            <h6 class="text-uppercase">Entrada Anual</h6>
                            <h1 class="display-4">R$ 134</h1>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 py-2">
                    <div class="card text-white bg-danger h-100">
                        <div class="card-body bg-danger">
                            <div class="rotate">
                                <i class="fa fa-list fa-4x"></i>
                            </div>
                            <h6 class="text-uppercase">Entrada Mensal</h6>
                            <h1 class="display-4">R$ 87</h1>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 py-2">
                    <div class="card text-white bg-info h-100">
                        <div class="card-body bg-info">
                            <div class="rotate">
                                <i class="fa fa-twitter fa-4x"></i>
                            </div>
                            <h6 class="text-uppercase">Saldo Anual</h6>
                            <h1 class="display-4">R$ 125</h1>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 py-2">
                    <div class="card text-white bg-warning h-100">
                        <div class="card-body">
                            <div class="rotate">
                                <i class="fa fa-share fa-4x"></i>
                            </div>
                            <h6 class="text-uppercase">saida Mensal</h6>
                            <h1 class="display-4">R$ 36</h1>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 py-2">
                    <div class="card text-white bg-secondary h-100">
                        <div class="card-body">
                            <div class="rotate">
                                <i class="fa fa-share fa-4x"></i>
                            </div>
                            <h6 class="text-uppercase">Caixa</h6>
                            <h1 class="display-4">R$ 36</h1>
                        </div>
                    </div>
                </div>
            </div>
            <!--/row-->

            <hr>
            <p class="lead mt-5">
                Meses
            </p>
            <div class="row placeholders mb-3">
                <?php for($i=1;$i<=@count($meses);$i++){
            ?>
                    
               
                <div class="col-6 col-sm-3 placeholder text-center" onclick="abrir('<?=$i?>')">
                    <img src="https://via.placeholder.com/150/<?=$i?><?=$i?>55/fff?text=<?=$i?>" class="mx-auto img-fluid rounded-circle" alt="Generic placeholder thumbnail">
                    <h4><?=$meses[$i]?></h4>
                    
                </div>
                
            <?php }?>
            </div>

            <a id="features"></a>
            <hr>
            <p class="lead mt-5">
               Segue abaixo os lançamentos e dividas deste mês, e as dividas e recebimentos que não foram efetivados.
            </p>
            
           <!-- col-lg-9 col-md-8 -->
                <div class=" col-sm-12">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead class="thead-inverse">
                                <tr>
                                    <th>Descrição</th>
                                    <th>Data</th>
                                    <th>Valor</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1,001</td>
                                    <td>responsive</td>
                                    <td>bootstrap</td>
                                    <td>cards</td>
                                </tr>
                                <tr>
                                    <td>1,002</td>
                                    <td>rwd</td>
                                    <td>web designers</td>
                                    <td>theme</td>
                                </tr>
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!--/row-->
    
            </div><!--/row-->

        </div>
        <!--/main col-->
    </div>

</div>
<!--/.container-->

<div class="modal" tabindex="-1" id="Modal" role="dialog">
  <div class="modal-dialog" style="max-width: 70%;" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"> </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div id="conteudo"></div>
      <!-- <div class="modal-body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" onclick="fecharmodal()">Close</button>
      </div> -->
    </div>
  </div>
</div>

<?php 
include "footer.php";
?>


<script>

var mese= {
    '1' : 'Janeiro',
    '2': 'Fevereiro',
    '3' : 'Março',
    '4' : 'Abril',
    '5' : 'Maio',
    '6' : 'Junho',
    '7' : 'Julho',
    '8' : 'Agosto',
    '9' : 'Setembro',
    '10' : 'Outubro',
    '11' : 'Novembro',
    '12' : 'Dezembro'}

function dataAtualFormatada() {

    var data = new Date(),
        dia = data.getDate().toString(),
        diaF = (dia.length == 1) ? '0' + dia : dia,
        mes = (data.getMonth() + 1).toString(), //+1 pois no getMonth Janeiro começa com zero.
        mesF = (mes.length == 1) ? '0' + mes : mes,
        anoF = data.getFullYear();
    return anoF + "-" + mesF + "-" + diaF;
}
 
    function abrir(mes)
    {
        html='<div class="container"><button type="button" onclick="abrirMov('+mes+')" class="btn btn-primary">Adicionar movimentação</button> <select id="selectAno" class="form-control col-sm-4 float-right"><option>2021</option></select></div>';        
        html+='<div class="table-responsive">';
        html+='<table class="table table-striped"><thead class="thead-inverse"><tr>';
        html+='<th>Descrição</th>';
        html+='<th>Tipo</th>';
        html+='<th>Data</th>';
        html+='<th>Valor</th>';
        html+='<th>Status</th>';
        html+='</tr></thead><tbody><tr>';
        html+='<td>Salario</td>';
        html+='<td>Entrada</td>';
        html+='<td>12/04/2021</td>';
        html+='<td>R$ 4500.00</td>';
        html+='<td>OK</td>';
        html+='</tr><tr>';
        html+='<td>Feira/aluguel/lazer</td>';
        html+='<td>Saida</td>';
        html+='<td>12/04/2021</td>';
        html+='<td>R$ 2000.00</td>';
        html+='<td>OK</td>';  
         
        html+='</tr></tbody>';
        html+='</table></div>';

        $('#conteudo').html(html);
        $('#Modal').modal({
            keyboard: false,
            show:true
        });
      
        // console.log(mese);
        $('.modal-title').text("Lista Mês de "+mese[mes])
    }

    function addMov(mes)
    {
        html='<div class="modal-body">'; 

        html+='<div class="row">';
        html+='<div class="col">';
            html+='<label for="">Movimentação <select class="form-control" id="movimentacao"> <option value="entrada">ENTRADA</option> <option value="saida">SAÍDA</option> </select></label> ';
        html+='</div>';

          html+='<input type="hidden" id="mes" value="'+mes+'" class="form-control">';
                

         html+='<div class="col">';
            html+='<label for="">Dia <input type="hidden" id="data" value="'+dataAtualFormatada()+'" class="form-control"> <input type="number" id="dia" min="1" max="31" class="form-control"></label> ';
        html+='</div>'; 

        html+='<div class="col">';
            html+='<label for="">Valor <input type="number" id="valor" step="0.01" class="form-control"></label> ';
        html+='</div>';

        html+='<div class="col-sm-6">';
            html+='<label class="col-sm-12" for="">Descrição <input type="text" id="descricao" class="form-control"></label> ';
        html+='</div>';         

        html+='</div>';       
        html+='</div><div class="modal-footer">';
        html+='<button type="button" class="btn btn-primary salvar">Salvar</button>';
        html+='<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>';
        html+=' </div>';

        $('.modal-title').text("Adicionar movimentação Mês de "+mese[mes])
        $('#conteudo').html(html);
        $('#Modal').modal({
            keyboard: false,
            show:true
        });
       
    }
function abrirMov(mes){
    // $('#Modal').modal('dispose');
    addMov(mes);
    // $('#Modal').modal({
    //         keyboard: false,
    //         show:true
    //     });
    
}

$(document).on('click','.salvar',function(){
    event.preventDefault();
    // $.post('./funcoes.php', dados,function(retorna){
    //     $('#mensagem').addClass('text-success');
    //         $('#mensagem').text(retorna);
    //   });
    window.alert("Sucesso");

});


</script>