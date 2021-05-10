<?php 
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
            Dados Cartões
            </h1>
            <p class="lead d-none d-sm-block">Historico</p>

           
            <div class="row mb-3">
                <div class="col-xl-3 col-sm-6 py-2">
                    <div class="card bg-danger text-white h-100">
                        <div class="card-body bg-warning">
                            <div class="rotate">
                                <i class="fa fa-user fa-4x"></i>
                            </div>
                            <h6 class="text-uppercase">Fatura Anual</h6>
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
                            <h6 class="text-uppercase">Fatura Mensal</h6>
                            <h1 class="display-4">R$ 87</h1>
                        </div>
                    </div>
                </div>
               
                <div class="col-xl-3 col-sm-6 py-2">
                    <div class="card text-white bg-success h-100">
                        <div class="card-body">
                            <div class="rotate">
                                <i class="fa fa-share fa-4x"></i>
                            </div>
                            <h6 class="text-uppercase">Disponivel</h6>
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
 
  


</script>