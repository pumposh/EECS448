/**
*	@file TestSuite.cpp
*	@author Pumposh Bhat
*	@date 11-04-2017
*	@brief A header file for Test Suite class
*/

#include <iostream>
#include "LinkedListOfInts.h"
#include "TestSuite.h"

TestSuite::TestSuite()
{

}

void TestSuite::runTests()
{
    std::cout << "\n\n\n\nTEST SUITE - linked list\n\n";    
    testEmpty();
    populate();
    testAddBack();
    testAddFront();
    testRemoveBack();
    testRemoveFront();
    std::cout << "\n\n";
}

void TestSuite::testEmpty()
{
    std::cout << "Test #1 isEmpty(): Testing if empty list is recognized...";
    
    if (list.isEmpty())
    {
        std::cout << "\tPASSED.\n";
    }
    else
    {
        std::cout << "\tFAILED.\n";
    }
}

void TestSuite::populate()
{
    list.addFront(4);
    list.addFront(3);
    list.addFront(2);
    list.addFront(1);

    tempVector = list.toVector();

    std::vector<int> comparator = {1, 2, 3, 4};

    std::cout << "Test #2 populate(): Testing population of list...";

    //Compare the vector from the list to the supposedly accurate list
    if (tempVector == comparator)
    {
        std::cout << "\t\tPASSED.\n";        
    }
    else
    {
        std::cout << "\t\tFAILED.\n";
    }
}

void TestSuite::testAddBack()
{
    LinkedListOfInts tempList = list;

    tempList.addBack(5);

    tempVector = tempList.toVector();

    std::vector<int> comparator = {1, 2, 3, 4, 5};

    std::cout << "Test #3 addBack(): Testing addition to back of list...";
    
    //Compare the vector from the list to the supposedly accurate list
    if (tempVector == comparator)
    {
        std::cout << "\t\tPASSED.\n";
    }
    else
    {
        std::cout << "\t\tFAILED.\n";
    }
}

void TestSuite::testAddFront()
{
    LinkedListOfInts tempList = list;
    
    tempList.addFront(0);

    tempVector = tempList.toVector();

    std::vector<int> comparator = {0, 1, 2, 3, 4};

    std::cout << "Test #4 addFront(): Testing addition to front of list...";

    //Compare the vector from the list to the supposedly accurate list
    if (tempVector == comparator)
    {
        std::cout << "\tPASSED.\n";        
    }
    else
    {
        std::cout << "\tFAILED.\n";
    }
}

void TestSuite::testRemoveBack()
{
    LinkedListOfInts tempList = list;
    
    tempList.removeBack();

    tempVector = tempList.toVector();

    std::vector<int> comparator = {1, 2, 3};

    std::cout << "Test #5 removeBack(): Testing removal of back of list...";

    //Compare the vector from the list to the supposedly accurate list
    if (tempVector == comparator)
    {
        std::cout << "\tPASSED.\n";        
    }
    else
    {
        std::cout << "\tFAILED.\n";
    }
}

void TestSuite::testRemoveFront()
{
    LinkedListOfInts tempList = list;
    
    tempList.removeBack();

    tempVector = tempList.toVector();

    std::vector<int> comparator = {2, 3, 4};

    std::cout << "Test #6 removeFront(): Testing removal of front of list...";

    //Compare the vector from the list to the supposedly accurate list
    if (tempVector == comparator)
    {
        std::cout << "\tPASSED.\n";        
    }
    else
    {
        std::cout << "\tFAILED.\n";
    }
}
