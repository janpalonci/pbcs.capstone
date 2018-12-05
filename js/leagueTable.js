

var divisionA = [
   
	{
		id: 1,
        team: "Tarmac United",
		gp: "5",
		w: "5",
        d: "0",
        l: "0",
        gd: "13",
        pts: "9",
        
	}, 
    
	{
		id: 2,
        team: "Outkasts",
		gp: "5",
		w: "4",
        d: "0",
        l: "1",
        gd: "4",
        pts: "12",
	}, 
	{
		id: 3,
		team: "Euro FC",
		gp: "5",
		w: "3",
        d: "0",
        l: "2",
        gd: "4",
        pts: "9",
	}, 
	{
		id: 4,
		team: "Selecao",
		gp: "5",
		w: "2",
        d: "1",
        l: "2",
        gd: "8",
        pts: "7",
	}, 
	{
		id: 5,
		team: "Power Soccer FC",
		gp: "5",
		w: "2",
        d: "1",
        l: "2",
        gd: "5",
        pts: "7",
	}, 
	{
		id: 6,
		team: "L'Equipe DeReve",
		gp: "5",
		w: "2",
        d: "1",
        l: "2",
        gd: "0",
        pts: "7",
	}, 
	{
		id: 7,
		team: "O'Shea's Celtic",
		gp: "5",
		w: "2",
        d: "1",
        l: "2",
        gd: "-1",
        pts: "7",
	},
    {
		id: 8,
		team: "Victorious Secret",
		gp: "5",
		w: "2",
        d: "0",
        l: "3",
        gd: "-4",
        pts: "6",
	},
    {
		id: 9,
		team: "Hawks",
		gp: "5",
		w: "1",
        d: "0",
        l: "4",
        gd: "-8",
        pts: "3",
	},
    {
		id: 10,
		team: "Lions FC",
		gp: "5",
		w: "0",
        d: "0",
        l: "5",
        gd: "-16",
        pts: "0",
	}
    
];

divisionA.sort(function(a, b) {
    return parseInt(b.pts) - parseInt(a.pts);
});
var output = '<table>' +
              '<tr class="col">' +
				'<th>#</th>' +
				'<th>Team</th>' +
				'<th>GP</th>' +
				'<th>W</th>' +
				'<th>D</th>' +
				'<th>L</th>' +
				'<th>GD</th>' +
				'<th>PTS</th>' +
				'</tr>';
for( var i = 0; i<divisionA.length; i++ ) {
    output+='<tr class="pos">';
    output+='<td>' + [i + 1] + '</td>';
    output+='<td>' + divisionA[i].team + '</td>';
    output+='<td>' + divisionA[i].gp + '</td>';
    output+='<td>' + divisionA[i].w + '</td>';
    output+='<td>' + divisionA[i].d + '</td>';
    output+='<td>' + divisionA[i].l + '</td>';
    output+='<td>' + divisionA[i].gd + '</td>';
    output+='<td>' + divisionA[i].pts + '</td>';
    output+='</tr>';
    
    
}


 document.querySelector('.divA').innerHTML = output + '</table>';

var divisionB = [
   
	{
		id: 1,
        team: "Real Boca",
		gp: "5",
		w: "5",
        d: "0",
        l: "0",
        gd: "35",
        pts: "15",
        
	}, 
    
	{
		id: 2,
        team: "The Lads",
		gp: "5",
		w: "5",
        d: "0",
        l: "0",
        gd: "23",
        pts: "15",
	}, 
	{
		id: 3,
		team: "Ztnuc FC",
		gp: "5",
		w: "4",
        d: "0",
        l: "1",
        gd: "9",
        pts: "12",
	}, 
	{
		id: 4,
		team: "TNM United",
		gp: "5",
		w: "3",
        d: "0",
        l: "2",
        gd: "5",
        pts: "9",
	}, 
	{
		id: 5,
		team: "Berman and Berman",
		gp: "5",
		w: "2",
        d: "1",
        l: "2",
        gd: "-2",
        pts: "7",
	}, 
	{
		id: 6,
		team: "Atletico San Pancho",
		gp: "5",
		w: "2",
        d: "0",
        l: "3",
        gd: "-13",
        pts: "6",
	}, 
	{
		id: 7,
		team: "Boca City FC",
		gp: "5",
		w: "1",
        d: "1",
        l: "3",
        gd: "-2",
        pts: "4",
	},
    {
		id: 8,
		team: "Orange FC",
		gp: "5",
		w: "1",
        d: "1",
        l: "3",
        gd: "-8",
        pts: "4",
	},
    {
		id: 9,
		team: "Zimbabwean Trillionaires",
		gp: "5",
		w: "0",
        d: "1",
        l: "4",
        gd: "-19",
        pts: "1",
	},
    {
		id: 10,
		team: "La Fed",
		gp: "5",
		w: "0",
        d: "0",
        l: "5",
        gd: "-17",
        pts: "0",
	}
    
];

divisionB.sort(function(a, b) {
    return parseInt(b.pts) - parseInt(a.pts);
});
var output = '<table>' +
              '<tr class="col">' +
				'<th>#</th>' +
				'<th>Team</th>' +
				'<th>GP</th>' +
				'<th>W</th>' +
				'<th>D</th>' +
				'<th>L</th>' +
				'<th>GD</th>' +
				'<th>PTS</th>' +
				'</tr>';
for( var i = 0; i<divisionB.length; i++ ) {
    output+='<tr class="pos">';
    output+='<td>' + [i + 1] + '</td>';
    output+='<td>' + divisionB[i].team + '</td>';
    output+='<td>' + divisionB[i].gp + '</td>';
    output+='<td>' + divisionB[i].w + '</td>';
    output+='<td>' + divisionB[i].d + '</td>';
    output+='<td>' + divisionB[i].l + '</td>';
    output+='<td>' + divisionB[i].gd + '</td>';
    output+='<td>' + divisionB[i].pts + '</td>';
    output+='</tr>';
    
    
}


 document.querySelector('.divB').innerHTML = output + '</table>';

var divisionC = [
   
	{
		id: 1,
        team: "FC United Nations",
		gp: "5",
		w: "3",
        d: "1",
        l: "1",
        gd: "5",
        pts: "10",
        
	}, 
    
	{
		id: 2,
        team: "Palm Beach Chiros",
		gp: "5",
		w: "3",
        d: "0",
        l: "2",
        gd: "7",
        pts: "9",
	}, 
	{
		id: 3,
		team: "Palm Beach United",
		gp: "5",
		w: "3",
        d: "0",
        l: "2",
        gd: "4",
        pts: "9",
	}, 
	{
		id: 4,
		team: "Boynton Tropics",
		gp: "5",
		w: "3",
        d: "0",
        l: "2",
        gd: "2",
        pts: "9",
	}, 
	{
		id: 5,
		team: "The Red Diablos",
		gp: "5",
		w: "2",
        d: "1",
        l: "2",
        gd: "0",
        pts: "7",
	}, 
	{
		id: 6,
		team: "Atletic Club",
		gp: "5",
		w: "2",
        d: "1",
        l: "2",
        gd: "0",
        pts: "7",
	}, 
	{
		id: 7,
		team: "O'Shea's Stumblers",
		gp: "5",
		w: "2",
        d: "0",
        l: "3",
        gd: "-2",
        pts: "6",
	},
    {
		id: 8,
		team: "Authentic Soccer FC",
		gp: "5",
		w: "0",
        d: "1",
        l: "4",
        gd: "-11",
        pts: "1",
	}
    
];

divisionC.sort(function(a, b) {
    return parseInt(b.pts) - parseInt(a.pts);
});
var output = '<table>' +
              '<tr class="col">' +
				'<th>#</th>' +
				'<th>Team</th>' +
				'<th>GP</th>' +
				'<th>W</th>' +
				'<th>D</th>' +
				'<th>L</th>' +
				'<th>GD</th>' +
				'<th>PTS</th>' +
				'</tr>';
for( var i = 0; i<divisionC.length; i++ ) {
    output+='<tr class="pos">';
    output+='<td>' + [i + 1] + '</td>';
    output+='<td>' + divisionC[i].team + '</td>';
    output+='<td>' + divisionC[i].gp + '</td>';
    output+='<td>' + divisionC[i].w + '</td>';
    output+='<td>' + divisionC[i].d + '</td>';
    output+='<td>' + divisionC[i].l + '</td>';
    output+='<td>' + divisionC[i].gd + '</td>';
    output+='<td>' + divisionC[i].pts + '</td>';
    output+='</tr>';
    
    
}


 document.querySelector('.divC').innerHTML = output + '</table>';