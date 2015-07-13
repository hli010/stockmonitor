#!/usr/bin/env python

"""docstring
"""

__revision__ = '0.1'


input = "stock.list";

res = [];
with open(input) as f:
    for line in f:
        res.append(line[:-1]);

#print(res)

newres = [];
for item in res:
    if item not in newres:
        newres.append(item);

#print(newres)

for item in newres:
    print(item);



        


