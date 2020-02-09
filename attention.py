import os
b=input("Enter the message")
cmd = "curl https://api.simplepush.io/send/XiKUvr/Attention/" + b
cmd1 = "curl https://api.simplepush.io/send/6dyEeV/Attention/" + b
cmd2 = "curl https://api.simplepush.io/send/8KJ4Qc/Attention/" + b
cmd3 = "curl https://api.simplepush.io/send/nFDNQ2/Attention/" + b
os.system(cmd)
os.system(cmd1)
os.system(cmd2)
os.system(cmd3)
