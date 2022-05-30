<?php

function headset($numéro_facture,$Nom_client,$Adresse,$Code_Postal,$Numéro_téléphone,$Email){
    $html='';
    $html.='<!DOCTYPE HTML>
    <html>
    <head>
    <link rel=stylesheet type=text/css href=style.css/>
    <style>
        table {
          font-family: arial, sans-serif;
          border-collapse: collapse;
          width:7.83in;
        }
        
        td, th {
          border: 1px solid #dddddd;
          text-align: left;
          padding: 8px;
        }
        
        tr:nth-child(even) {
          background-color: #dddddd;
        }
        </style>
    </head>
    <body>
    <img style=position:absolute;top:10.89in;left:5.35in;width:4.17in;height:3.69in src=OutDocument/ci_1.png />
    <img style=position:absolute;top:0.00in;left:0.00in;width:3.93in;height:3.53in src=OutDocument/vi_1.png />
    <div style=position:absolute;top:1.12in;left:0.64in;width:5.78in;line-height:0.20in;><span style=font-style:normal;font-weight:normal;font-size:14pt;font-family:Calibri;color:#000000>TUTTO </span><span style=font-style:normal;font-weight:normal;font-size:11pt;font-family:Calibri;color:#000000></span><span style=font-style:normal;font-weight:normal;font-size:11pt;font-family:Calibri;color:#000000>Buy</span><span style=font-style:normal;font-weight:normal;font-size:11pt;font-family:Calibri;color:#000000> </span><br/></SPAN></div>
    <div style=position:absolute;top:1.39in;left:6.01in;width:1.47in;line-height:0.18in;><span style=font-style:normal;font-weight:bold;font-size:12pt;font-family:Calibri;color:#000000>Numéro de facture</span><span style=font-style:normal;font-weight:bold;font-size:12pt;font-family:Calibri;color:#000000> </span><br/></SPAN>'.$numéro_facture.'</div>
    <div style=position:absolute;top:1.84in;left:0.64in;width:1.42in;line-height:0.17in;><span style=font-style:normal;font-weight:bold;font-size:11pt;font-family:Calibri;color:#7030a0>TUTTO Buy</span><span style=font-style:normal;font-weight:bold;font-size:11pt;font-family:Calibri;color:#7030a0></span><br/></SPAN></div>
    <div style=position:absolute;top:2.05in;left:0.64in;width:1.34in;line-height:0.17in;><span style=font-style:normal;font-weight:normal;font-size:11pt;font-family:Calibri;color:#000000>Tunisie, Sfax</span><span style=font-style:normal;font-weight:normal;font-size:11pt;font-family:Calibri;color:#000000></span><br/></SPAN></div>
    <div style=position:absolute;top:2.27in;left:0.64in;width:1.34in;line-height:0.17in;><span style=font-style:normal;font-weight:normal;font-size:11pt;font-family:Calibri;color:#000000>3011, rte mahdia</span><span style=font-style:normal;font-weight:normal;font-size:11pt;font-family:Calibri;color:#000000> </span><br/></SPAN></div>
    <div style=position:absolute;top:2.49in;left:0.64in;width:1.53in;line-height:0.17in;><span style=font-style:normal;font-weight:normal;font-size:11pt;font-family:Calibri;color:#000000>24212056</span><span style=font-style:normal;font-weight:normal;font-size:11pt;font-family:Calibri;color:#000000> </span><br/></SPAN></div>
    <div style=position:absolute;top:2.71in;left:0.64in;width:0.41in;line-height:0.17in;><span style=font-style:normal;font-weight:normal;font-size:11pt;font-family:Calibri;color:#000000>TUTTO.Buy@gmail.com</span><span style=font-style:normal;font-weight:normal;font-size:11pt;font-family:Calibri;color:#000000> </span><br/></SPAN></div>
    <div style=position:absolute;top:2.93in;left:6.01in;width:1.01in;line-height:0.17in;><span style=font-style:normal;font-weight:bold;font-size:11pt;font-family:Calibri;color:#000000>'.$Nom_client.'</span><span style=font-style:normal;font-weight:bold;font-size:11pt;font-family:Calibri;color:#000000> </span><br/></SPAN></div>
    <div style=position:absolute;top:3.15in;left:6.01in;width:0.58in;line-height:0.17in;><span style=font-style:normal;font-weight:normal;font-size:11pt;font-family:Calibri;color:#000000>'.$Adresse.'</span><span style=font-style:normal;font-weight:normal;font-size:11pt;font-family:Calibri;color:#000000> </span><br/></SPAN></div>
    <div style=position:absolute;top:3.37in;left:6.01in;width:1.34in;line-height:0.17in;><span style=font-style:normal;font-weight:normal;font-size:11pt;font-family:Calibri;color:#000000>'.$Code_Postal.'</span><span style=font-style:normal;font-weight:normal;font-size:11pt;font-family:Calibri;color:#000000> </span><br/></SPAN></div>
    <div style=position:absolute;top:3.59in;left:6.01in;width:1.53in;line-height:0.17in;><span style=font-style:normal;font-weight:normal;font-size:11pt;font-family:Calibri;color:#000000>'.$Numéro_téléphone.'</span><span style=font-style:normal;font-weight:normal;font-size:11pt;font-family:Calibri;color:#000000> </span><br/></SPAN></div>
    <div style=position:absolute;top:3.81in;left:6.01in;width:0.41in;line-height:0.17in;><span style=font-style:normal;font-weight:normal;font-size:11pt;font-family:Calibri;color:#000000>'.$Email.'</span><span style=font-style:normal;font-weight:normal;font-size:11pt;font-family:Calibri;color:#000000> </span><br/></SPAN></div>
    <div style=position:absolute;top:4.25in;left:0.64in;width:1.03in;line-height:0.17in;><span style=font-style:normal;font-weight:bold;font-size:11pt;font-family:Calibri;color:#000000>Objet :</span><span style=font-style:normal;font-weight:normal;font-size:11pt;font-family:Calibri;color:#000000> intitulé</span><span style=font-style:normal;font-weight:normal;font-size:11pt;font-family:Calibri;color:#000000> </span><br/></SPAN></div>
    <div style=position:absolute;top:9.44in;left:0.64in;width:7.33in;line-height:0.12in;><span style=font-style:normal;font-weight:normal;font-size:8pt;font-family:Calibri;color:#000000>La loi n°92/1442 du 31 décembre 1992 nous fait l’obligation de vous indiquer que le non-respect des conditions de paiement entraine des intérêts de</span><span style=font-style:normal;font-weight:normal;font-size:8pt;font-family:Calibri;color:#000000> </span><br/></SPAN></div>
    <div style=position:absolute;top:9.60in;left:0.64in;width:7.33in;line-height:0.12in;><span style=font-style:normal;font-weight:normal;font-size:8pt;font-family:Calibri;color:#000000>retard suivant modalités et taux défini par la loi. Une indemnité forfaitaire de 40 DNT sera due pour frais de recouvrement en cas de retard de paiement.</span><span style=font-style:normal;font-weight:normal;font-size:8pt;font-family:Calibri;color:#000000> </span><br/></SPAN></div>
    <img style=position:absolute;top:4.60in;left:0.60in;width:2.56in;height:0.27in src=OutDocument/vi_2.png />
    <img style=position:absolute;top:4.63in;left:0.67in;width:2.41in;height:0.20in src=OutDocument/ci_2.png />
    <div style=position:absolute;top:4.66in;left:1.58in;width:0.83in;line-height:0.17in;><span style=font-style:normal;font-weight:bold;font-size:11pt;font-family:Calibri;color:#ffffff>Description</span><span style=font-style:normal;font-weight:bold;font-size:11pt;font-family:Calibri;color:#ffffff> </span><br/></SPAN></div>
    <img style=position:absolute;top:4.60in;left:3.17in;width:0.74in;height:0.27in src=OutDocument/vi_3.png />
    <img style=position:absolute;top:4.63in;left:3.25in;width:0.58in;height:0.20in src=OutDocument/ci_3.png />
    <div style=position:absolute;top:4.66in;left:3.3in;width:0.42in;line-height:0.17in;><span style=font-style:normal;font-weight:bold;font-size:11pt;font-family:Calibri;color:#ffffff>Unité</span><span style=font-style:normal;font-weight:bold;font-size:11pt;font-family:Calibri;color:#ffffff> </span><br/></SPAN></div>
    <img style=position:absolute;top:4.60in;left:3.91in;width:0.93in;height:0.27in src=OutDocument/vi_4.png />
    <img style=position:absolute;top:4.63in;left:3.99in;width:0.77in;height:0.20in src=OutDocument/ci_4.png />
    <div style=position:absolute;top:4.66in;left:4.07in;width:0.65in;line-height:0.17in;><span style=font-style:normal;font-weight:bold;font-size:11pt;font-family:Calibri;color:#ffffff>Quantité</span><span style=font-style:normal;font-weight:bold;font-size:11pt;font-family:Calibri;color:#ffffff> </span><br/></SPAN></div>
    <img style=position:absolute;top:4.60in;left:4.85in;width:1.26in;height:0.27in src=OutDocument/vi_5.png />
    <img style=position:absolute;top:4.63in;left:4.93in;width:1.10in;height:0.20in src=OutDocument/ci_5.png />
    <div style=position:absolute;top:4.66in;left:4.94in;width:1.13in;line-height:0.17in;><span style=font-style:normal;font-weight:bold;font-size:11pt;font-family:Calibri;color:#ffffff>Prix Unitaire HT</span><span style=font-style:normal;font-weight:bold;font-size:11pt;font-family:Calibri;color:#ffffff> </span><br/></SPAN></div>
    
    <img style=position:absolute;top:4.60in;left:6.11999in;width:1.71in;height:0.27in src=OutDocument/vi_7.png />
    <img style=position:absolute;top:4.63in;left:6.11999in;width:1.55in;height:0.20in src=OutDocument/ci_7.png />
    <div style=position:absolute;top:4.66in;left:6.68in;width:0.62in;line-height:0.17in;><span style=font-style:normal;font-weight:bold;font-size:11pt;font-family:Calibri;color:#ffffff>Total HT</span><span style=font-style:normal;font-weight:bold;font-size:11pt;font-family:Calibri;color:#ffffff> </span><br/></SPAN></div>
    <img style=position:absolute;top:4.59in;left:0.59in;width:0.01in;height:0.01in src=OutDocument/vi_8.png />
    <img style=position:absolute;top:4.59in;left:0.59in;width:0.01in;height:0.01in src=OutDocument/vi_9.png />
    <img style=position:absolute;top:4.59in;left:0.60in;width:2.76in;height:0.01in src=OutDocument/vi_10.png />
    <img style=position:absolute;top:4.59in;left:3.36in;width:0.01in;height:0.01in src=OutDocument/vi_11.png />
    <img style=position:absolute;top:4.59in;left:3.37in;width:0.54in;height:0.01in src=OutDocument/vi_12.png />
    <img style=position:absolute;top:4.59in;left:3.91in;width:0.01in;height:0.01in src=OutDocument/vi_13.png />
    <img style=position:absolute;top:4.59in;left:3.92in;width:0.93in;height:0.01in src=OutDocument/vi_14.png />
    <img style=position:absolute;top:4.59in;left:4.85in;width:0.01in;height:0.01in src=OutDocument/vi_15.png />
    <img style=position:absolute;top:4.59in;left:4.85in;width:1.26in;height:0.01in src=OutDocument/vi_16.png />
    <img style=position:absolute;top:4.60in;left:0.59in;width:0.01in;height:0.27in src=OutDocument/vi_23.png />
    <img style=position:absolute;top:4.60in;left:3.91in;width:0.01in;height:0.27in src=OutDocument/vi_25.png />
    <img style=position:absolute;top:4.60in;left:4.85in;width:0.01in;height:0.27in src=OutDocument/vi_26.png />
    <div style=position:absolute;top:4.93in;left:0.6in;width:7.7in;>
        <table>';
    return $html;
}

function add_user($product_name,$categorie,$Qte,$prix_piece,$prix_qte){
    $html='<tr>
          <td>'.$product_name.'</td>
          <td style="width:0.75in;">'.$categorie.'</td>
          <td style="width:0.9in;">'.$Qte.'</td>
          <td style="width:1.27in;">'.$prix_piece.'</td>
          <td style="width:1.71in;">'.$prix_qte.'</td>
        </tr>';
    return $html;
}

function footset($Montant_Total){
    $html=' </table>
    </div>
<div style="position:absolute;top:6.93in;left:5.52in;width:0.54in;">
    <table style="width:2.9in;">
        <tr>
          <td style="width:1.45in;">Montant_Total</td>
          <td style="width:1.45in;">'.$Montant_Total.'</td>
        </tr>
        <tr>
          <td>Total TVA </td>
          <td>0.18%</td>
        </tr>
        <tr>
          <td><bold>Montant Total TTC</bold></td>
          <td>'.(($Montant_Total*0.18)/100).'</td>
        </tr>
      </table>
</div> 
<img style="position:absolute;top:11.29in;left:7.40in;width:3.27in;height:1.86in" src="OutDocument/ci_32.png" />
<img style="position:absolute;top:0.00in;left:0.00in;width:1.72in;height:1.72in" src="OutDocument/ci_33.png" />
</body>
</html>';
return $html;
}