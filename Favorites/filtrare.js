function filtration(){
    tabelFilters=document.querySelectorAll(".filter");
    entrys= document.querySelectorAll(".favs > tbody > tr");
    
    varCity=new Array();
    varType=new Array();
    entrys.forEach((entry) =>{
        cityValue=entry.querySelector("td:nth-child(2)").innerHTML;
        if(!varCity.includes(cityValue)){
            varCity.push(cityValue);
            tabelFilters[0].innerHTML =  tabelFilters[0].innerHTML + `\n<option value="${cityValue}">${cityValue}</option>`
        }

        typeValue=entry.querySelector("td:nth-child(3)").innerHTML;
        if(!varType.includes(typeValue)){
            varType.push(typeValue);
            tabelFilters[1].innerHTML =  tabelFilters[1].innerHTML + `\n<option value="${typeValue}">${typeValue}</option>`
        }
    });
}

function filtrationEntry(){
    let tabelFilters=document.querySelectorAll(".filter");
    entrys= document.querySelectorAll(".favs > tbody > tr");
    filters=new Array(tabelFilters[0].value,tabelFilters[1].value);
    entrys.forEach((entry) =>{
        entry.style.display = "table-row";
        entryCityValue=entry.querySelector("td:nth-child(2)").innerHTML;
        entryTypeValue=entry.querySelector("td:nth-child(3)").innerHTML;
        if( (entryCityValue != filters[0] && filters[0]!="all") || (entryTypeValue!=filters[1] && filters[1]!="all")){
            entry.style.display = "none";
        }
    });
}