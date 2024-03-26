import matplotlib.pyplot as plt
from mpl_toolkits.mplot3d import Axes3D

# 数据
x = [1, 2, 3, 4]
y = [2, 3, 4, 5]
z = [3, 4, 5, 6]

# 创建图形和轴
fig = plt.figure()
ax = fig.add_subplot(111, projection='3d')

# 绘制散点图
ax.scatter(x, y, z, c='r', marker='o')

# 设置轴标签
ax.set_xlabel('X Label')
ax.set_ylabel('Y Label')
ax.set_zlabel('Z Label')

# 显示图形
plt.show()
