class Node(object):
    length = 0

    def __init__(self,element=None, next = None):
        self.element = element
        self.next = next #the pointer is empty initially
    def get_elements(self):
        return self.element
    def get_next(self):
        return self.next
    def set_next(self, new_next):
        self.next = new_next

class LinkedList(object):
#initialise linkedlist
    def __init__(self, head = None):
        self.head = head
    
    def insert(self, element):
        new_node = Node(element)
        new_node.set_next(self.head)
        self.head = new_node
    def size(self,node):
        current = self.head
        count = 0
        while current:
            count += 1
            current = current.get_next()
        return count
    def search(self, element):
        current = self.head
        found = False

        while current and found is False:
            if current.get_elements == element:
                found == True
            else:
                current = current.get_next()
            if current is None:
                raise ValueError("Data not in the list")
            return current
    def delete(self, element):
        current = self.head
        previous = None
        found = False
        while current and found  is False:
            if current.get_elements == element:
                found = True
            else:
                previous = current
                current = current.get_next
        if current is None:
            raise ValueError("Data not in the list")
        if previous is None:
            self.head = current.get_next
        else:
            previous.set_next(current.get_next)        
