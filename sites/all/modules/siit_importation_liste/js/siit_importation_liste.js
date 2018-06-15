function updateStatut(id_importation,id_statut){
    var msg = id_statut == 2 ? "Souhaitez vous valider les données ?" : "Souhaitez vous refuser les données ?";
    bootbox.confirm(msg, function(result){
			if(result){
				document.location.href = 'siit_importation_liste?id_importation='+id_importation+"&id_statut="+id_statut;
			}
		});
}

function devalideStatut(id_importation,id_statut){
    var msg =  "Souhaitez vous dévalider les données ?";
    bootbox.confirm(msg, function(result){
			if(result){
				document.location.href = 'siit_importation_devalide?id_importation='+id_importation+"&id_statut="+id_statut;
			}
		});
}