#Recursividad Fibonacci

#Recursividad de un factorial
def factor(num):
    
    if num!=0:
        return num*factor(num-1)
    else:
        return 1
print(factor(5))