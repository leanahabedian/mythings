ultimo(X,U) :- append(_,[U],X).


reverso([],[]).
reverso([X|Xs],R) :- reverso(Xs,Ys), append(Ys,[X],R).

rever([],[]).
rever(Xs,[R|Rs]) :- ultimo(Xs,R), sacarUltimo(Xs,Xss), rever(Xss,Rs).

sacarUltimo([_],[]).
sacarUltimo([X|Xs],[X|R]) :- sacarUltimo(Xs,R).

sacarPrimero([],[]).
sacarPrimero([_|Xs], Xs).

maxLista([X],X).
maxLista([X,Y|Xs],Max) :-  X >= Y, Max is X, maxLista([X|Xs],Max).
maxLista([X,Y|Xs],Max) :- X < Y, Max is Y,  maxLista([Y|Xs],Max).
