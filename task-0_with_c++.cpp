#include<bits/stdc++.h>
using namespace std;
bool is_Valid_Parentheses(string &str){
    stack<int> open_parentheses;
    map<char,char> allParentheses;
    allParentheses['('] = ')';
    allParentheses['{'] = '}';
    allParentheses['['] = ']';
    for(auto parentheses : str){
        if(allParentheses[parentheses]) open_parentheses.push(parentheses);
        else if(open_parentheses.size() == 0 || allParentheses[open_parentheses.top()] != parentheses){
            return false;
        }
        else open_parentheses.pop();
    }
    return open_parentheses.size() == 0;
}
int main(){
    string str;
    cin >> str;
    if( is_Valid_Parentheses(str) ){
        cout << "True\n";
    }
    else {
        cout << "False\n";
    }
    return 0;
}