function var_dump(obj){var out="";if(obj&&typeof(obj)=="object"){for (var i in obj){out+=i+": "+obj[i]+"\n";}}else{out=obj;}console.log(out);}
