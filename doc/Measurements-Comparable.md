Measurements\Comparable
===============

Instances of conforming types can be compared.




* Interface name: Comparable
* Namespace: Measurements
* This is an **interface**
* This interface extends: [Measurements\Equatable](Measurements-Equatable.md)





Methods
-------


### isGreaterThan

    boolean Measurements\Comparable::isGreaterThan(mixed $object)

Returns a Boolean value that indicates whether the receiver is greater than another given object.



* Visibility: **public**


#### Arguments
* $object **mixed** - &lt;p&gt;The object with which to compare the receiver.&lt;/p&gt;



### isGreaterThanOrEqualTo

    boolean Measurements\Comparable::isGreaterThanOrEqualTo(mixed $object)

Returns a Boolean value that indicates whether the receiver is greater than or equal to another given object.



* Visibility: **public**


#### Arguments
* $object **mixed** - &lt;p&gt;The object with which to compare the receiver.&lt;/p&gt;



### isLessThan

    boolean Measurements\Comparable::isLessThan(mixed $object)

Returns a Boolean value that indicates whether the receiver is less than another given object.



* Visibility: **public**


#### Arguments
* $object **mixed** - &lt;p&gt;The object with which to compare the receiver.&lt;/p&gt;



### isLessThanOrEqualTo

    boolean Measurements\Comparable::isLessThanOrEqualTo(mixed $object)

Returns a Boolean value that indicates whether the receiver is less than or equal to another given object.



* Visibility: **public**


#### Arguments
* $object **mixed** - &lt;p&gt;The object with which to compare the receiver.&lt;/p&gt;



### compareTo

    mixed Measurements\Comparable::compareTo(mixed $object, callable $comparison)

Compares the receiver to another given object.



* Visibility: **public**


#### Arguments
* $object **mixed** - &lt;p&gt;The object with which to compare the receiver.&lt;/p&gt;
* $comparison **callable** - &lt;p&gt;The closure used to compare objects.&lt;/p&gt;



### isEqualTo

    boolean Measurements\Equatable::isEqualTo(mixed $other)

Returns a boolean value that indicates whether the receiver is equal to another given object.



* Visibility: **public**
* This method is defined by [Measurements\Equatable](Measurements-Equatable.md)


#### Arguments
* $other **mixed** - &lt;p&gt;The object with which to compare the receiver.&lt;/p&gt;


