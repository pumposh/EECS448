/**
*	@file TestSuite.h
*	@author Pumposh Bhat
*	@date 11-04-2017
*	@brief A header file for Test Suite class
*/

#ifndef TESTSUITE_H
#define TESTSUITE_H

#include <iostream>
#include <vector>
#include "LinkedListOfInts.h"
#include "Node.h"

class TestSuite
{
    public:
    /** @pre None.
    *   @post An empty suite object is created and a sample LinkedListOfInts object is created.
    */
    TestSuite();

    /** @pre None.
	*   @post All tests are ran on the list
    */
    void runTests();

    /** @pre None.
	*   @post isEmpty() is tested
    */
    void testEmpty();
    
    /** @pre None.
	*   @post Adds a bunch of values to the list
    */
    void populate();

    /** @pre None.
	*   @post Add back method is tested
    */
    void testAddBack();

    /** @pre None.
     *  @post Add front method is tested
     */
    void testAddFront();

    /** @pre None.
     *  @post Remove back method is tested
     */
    void testRemoveBack();

    /** @pre None.
     *  @post Remove front method is tested
     */
    void testRemoveFront();

    private:
    LinkedListOfInts list;
    std::vector<int> tempVector;    
};

#endif