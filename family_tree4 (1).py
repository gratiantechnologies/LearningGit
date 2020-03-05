#!/usr/bin/env python
# coding: utf-8

# In[1]:


#from time import sleep
from collections import OrderedDict


# In[2]:


parent_gen = []
pre_child_gen = []
tree = []
all_family = OrderedDict()
depth = 1
gen1 = []
gen2 = []


# In[3]:


#taking the number of generations 
while True:
    try:
        gen_num = int(input('Enter number of generations to be entered, in addition to the first two generations:'))
    except:
        print('Please enter a valid number.')
    else:
        print('Taking in ',(gen_num + 2),' generations...')
        #sleep(3)
        break
gen_num2 = gen_num


# In[4]:


'''for w in range(1,gen_num2+1):
    tree.append(f'Gen{w}')'''

tree = list(range(1,gen_num2+1))


# In[5]:


#class to represent each parent-child relationship
class Relation():
    def __init__(self,parent):
        self.parent = parent
        self.child = []
        rel_dict = {}
        #children = []
        while True:
            try:
                num_chil = int(input(f'Enter number of children {parent} has/had:'))
            except:
                print('enter valid number')
            else:
                break
    
        for n in range(1,num_chil+1):
            self.child.append(input(f'Enter child{n}\'s name:'))
            #children.append(self.child[n-1])
        rel_dict[parent] = self.child
        all_family.update(rel_dict)
        #pre_child_gen = self.child
    
    def re_child(self):
        return self.child
            


# In[6]:


def show(show_dict):
    global depth
    for k,v in show_dict.items():
        print('\n\n\t'+'\t'*depth,k,'\n\n\n\n'+'\t'*depth,'\t'.join(v))
        depth += 1


# In[7]:



gen1 = list(input('enter the root/head\'s name:'))
#parent_gen = gen1
gen_21 = input('enter the head\'s first child\'s name:')
gen_22 = input('enter the head\'s second child\'s name:')
gen2 = [gen_21,gen_22]
#pre_child_gen = gen2
parent_gen = [gen_21,gen_22]
#temp_pre_child_gen = []
num = 0
for generation in tree:
    #print(generation)

    for parent in parent_gen:
        #print('parent_gen',parent_gen)
        ob = Relation(parent)
        pre_child_gen += ob.re_child()
        #print(parent_gen)
        #print('prechild',pre_child_gen)
        
    #print('pre_child_gen',pre_child_gen)
    parent_gen = pre_child_gen.copy()
    #print("parent_gen", parent_gen)
    pre_child_gen.clear()
    #print("parent_gen", parent_gen)
    #parent_gen.clear()
    #print(depth)
print('\t'+''.join(gen1))
print('\n')
print('\t'.join([gen_21,gen_22]))
print('\n')
show(all_family)


# In[ ]:




