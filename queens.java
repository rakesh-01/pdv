import java.util.LinkedList;

public class Queens { int k;
LinkedList<Integer> st;

public Queens(int n){ this.k = n;
this.st = new LinkedList<Integer>();
}
public Queens(){ this(8);
}

public boolean isValid(LinkedList<Integer> st){ if(st.size() == 1){
return true;
}
int st_size = st.size() - 1; int x = st_size;
int y = st.get(x);
for(int i = 0; i < st_size; i++){

if(st.getLast() == st.get(i)){ return false;
}

int xdiff1 = Math.abs(x - i);
int ydiff1 = Math.abs(y - st.get(i));

if(xdiff1 ==ydiff1){ return false;
}
}
return true;
}

public LinkedList<Integer> compute(LinkedList<Integer> st){

if(this.k == st.size()){ return st;
}
for(int i = 0; i < this.k; i++){
st.add(i);
if(isValid(st)){
LinkedList<Integer> temper = this.compute(st); if(temper != null) {
return temper;
}
}
st.removeLast();
}
return null;
}
public String toString(){
StringBuilder s = new StringBuilder(); s.append(this.st.toString());

for(int i = 0; i < this.k; i++){ s.append("\n");
for(int j = 0; j < this.k; j++){ if(this.st.get(i) == j){
s.append("| Q");
}
else{
s.append("| ");
}
}
s.append("|");
}
return s.toString();
}

public void solve(){
this.st = compute(new LinkedList<Integer>());
}
}
