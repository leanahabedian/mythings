%prolog file

arbolConSubconjuntos(_,nil).
arbolConSubconjuntos(Lista,bin(X,Y,Z)) :- arbolConSubconjuntos(Lista,X), arbolConSubconjuntos(Lista,Z), subconjunto(Lista,[],Y). 

subconjunto(Lista,YaPuestos,[X]):- member(X,Lista), not(member(X,YaPuestos)).
subconjunto(Lista,YaPuestos,[X|Xs]) :- member(X,Lista), not(member(X,YaPuestos)), subconjunto(Lista,[X|YaPuestos],Xs).








desde(X,X).
desde(X,Y) :- N is X + 1,  desde(N, Y), between(X,Y,N).

esTriangulo(tri(A,B,C)) :- esCompatible(A,B,C), esCompatible(B,A,C), esCompatible(C,A,B).

esCompatible(A,B,C) :- abs(B+C,H), abs(B-C,L), between(L,H,A).





perimetro(tri(A,B,C),P) :- esTriangulo(tri(A,B,C)), abs(A+B+C,P). 


triangulo(tri(A,B,C)) :- esTriangulo(tri(A,B,C)).


quicksort([],[]).
quicksort([X|Xs],L1) :- cortarSegun(X,Xs,Menores,Mayores), quicksort(Menores,MenoresOrd), quicksort(Mayores,MayoresOrd), append(MenoresOrd,[X|MayoresOrd],L1).

cortarSegun(_,[],[],[]).
cortarSegun(Pivote,[X|Xs],[X|L1],L2) :- Pivote >= X, cortarSegun(Pivote,Xs,L1,L2).
cortarSegun(Pivote,[X|Xs],L1,[X|L2]) :- Pivote < X, cortarSegun(Pivote,Xs,L1,L2).

corteMasParejo([],[],[]).
corteMasParejo([X|Xs],L1,L2) :- cortes([X|Xs],L1,L2), not(hayCorteMejor([X|Xs],L1,L2)).

hayCorteMejor([X|Xs],L1,L2) :- cortes([X|Xs],PrimerZopeda,SegundoZopeda), cortes([X|Xs], L1,L2), sum(PrimerZopeda,H1), sum(SegundoZopeda,H2), abs(H1-H2,N1), sum(L1,F1), sum(L2,F2), abs(F1-F2,N2), N2 > N1.

cortes(Lista,L1,L2) :- append(L1,L2,Lista).

sum([],0).
sum([X|Xs],N) :- sum(Xs,Nm1), N is Nm1+X.
