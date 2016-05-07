/**
 * Created by welcome on 07/05/2016.
 */
function splitImage(link){
    var tmp = link.substring(link.lastIndexOf("/"));
    tmp = tmp.replace("/","");
    return tmp;
}