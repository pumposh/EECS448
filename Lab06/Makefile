prog: main.o TestSuite.o
	g++ -g -Wall -std=c++11 main.o LinkedListOfInts.o TestSuite.o -o prog

main.o: main.cpp 
	g++ -g -Wall -std=c++11 -c main.cpp

TestSuite.o: TestSuite.cpp
	g++ -g -Wall -std=c++11 -c TestSuite.cpp

clean:
	rm main.o *.*~ prog
